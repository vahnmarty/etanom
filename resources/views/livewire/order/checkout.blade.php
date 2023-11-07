<div class="py-12">

    @push('head-scripts')
<script
      src="https://www.paypal.com/sdk/js?components=buttons,card-fields&client-id={{ config('services.paypal.client_id') }}"></script>
@endpush

@push('after-scripts')
<script>

        // Render the button component
        paypal
        .Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: function (data) {
            const endpoint = "{!! url('api/paypal/orders', $order->code) !!}";
            
            return fetch(endpoint, {
            method: "POST",
                body: {
                    paymentSource: data.paymentSource
                }
            })
            .then((response) => response.json())
            .then((order) => {
                // Log the result here
                console.log("createOrder result", order);
                // Store the order id in a variable accessible in onApprove
                const orderId = order.id;
                return orderId;
            });
        },
        // Finalize the transaction after payer approval
        onApprove: function (data) {
            const endpoint = "{!! url('api/paypal/orders/capture') !!}/" + data.orderID;
            return fetch(endpoint, {
            method: "POST",
            })
            .then((response) => response.json())
            .then((orderData) => {
                // Successful capture! For dev/demo purposes:
                console.log("Capture result", orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                // Show a success message within this page. For example:
                // var element = document.getElementById('paypal-button-container');
                // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                // Or go to another URL: actions.redirect('thank_you.html');
            });
        },
        onError: function (error) {
            // Do something with the error from the SDK
        }
        })
        .render("#paypal-button-container");

        // Create the Card Fields Component and define callbacks
        const cardField = paypal.CardFields({
        createOrder: function (data) {
            return fetch("myserver.com/api/orders", {
            method: "post",
            body: {
                paymentSource: data.paymentSource
            }
            })
            .then((res) => {
                return res.json();
            })
            .then((orderData) => {
                return orderData.id;
            });
        },
        onApprove: function (data) {
            const { orderID } = data;
            return fetch(`myserver.com/api/orders/${orderID}/capture`, {
            method: "post",
            })
            .then((res) => {
                return res.json();
            })
            .then((orderData) => {
                // Redirect to success page
            });
        },
        onError: function (error) {
            // Do something with the error from the SDK
        }
        });

        // Render each field after checking for eligibility
        if (cardField.isEligible()) {
        const nameField = cardField.NameField();
        nameField.render('#card-name-field-container');

        const numberField = cardField.NumberField();
        numberField.render('#card-number-field-container');

        const cvvField = cardField.CVVField();
        cvvField.render('#card-cvv-field-container');

        const expiryField = cardField.ExpiryField();
        expiryField.render('#card-expiry-field-container');

        // Add click listener to submit button and call the submit function on the CardField component
        document.getElementById("card-field-submit-button").addEventListener("click", () => {
            cardField
            .submit()
            .then(() => {
                // submit successful
            });
        });
        };
        
</script>
@endpush

    <div class="sm:px-6 lg:px-16">

        <h1 class="text-3xl font-bold">
            Checkout
        </h1>

        
        <div class="grid grid-cols-4 gap-8">

            <div class="col-span-2">
                <div id="paypal-button-container" class="mt-8 paypal-button-container"></div>
                <div class="flex items-center justify-between gap-3 py-5">
                    <div class="w-full border-t border-gray-300"></div>
                    <div>OR</div>
                    <div class="w-full border-t border-gray-300"></div>
                </div>

                <div id="checkout-form">
                    <div id="card-name-field-container"></div>
                    <div id="card-number-field-container"></div>
                    <div id="card-expiry-field-container"></div>
                    <div id="card-cvv-field-container"></div>
         
                    <button id="card-field-submit-button" class="inline-flex items-center justify-center w-full gap-2 px-8 py-3 text-lg text-white border border-transparent rounded-md shadow-md bg-normal-green hover:bg-normal-green/90" type="button">
                        Place Order
                    </button>
                 </div>
            </div>

            <div class="col-span-2">

                <div class="p-8 border border-gray-300">
                    <h4 class="font-bold">Shopping Cart</h4>

                    <div class="mt-6">
                        <div class="flex justify-between">
                            <p>Subtotal</p>
                            <p>{{ number_format($order->subtotal, 2) }}</p>
                        </div>
                        <div class="flex justify-between">
                            <p>Tax</p>
                            <p>{{ number_format(0, 2) }}</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="font-bold">Total</p>
                            <p class="font-bold">{{ number_format($order->total, 2) }}</p>
                        </div>
                    </div>

                    <div class="pt-3 mt-8 border-t">
                        <table class="w-full min-w-full divide-y divide-gray-300">
                            <thead>
                              <tr>
                                <th scope="col" width="50%" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Item</th>
                                <th scope="col" width="25%" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Qty</th>
                                <th scope="col" width="25%" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Price</th>
                              </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                              <tr>
                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">Seedballs</td>
                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $order->amount }}</td>
                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ number_format($order->total, 2) }}</td>
                              </tr>
                            </tbody>
                        </table>
                          
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>