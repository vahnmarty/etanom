<?php

namespace App\Http\Livewire;

use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;
use Log;

class Calculator extends Component
{
    public $inputs = [];

    public function render()
    {
        return view('livewire.calculator', ['categories' => $this->getCategories()])->layout('layouts.guest');
    }

    public function getCategories()
    {
        $data = [
            [
              "title" => "Transportation",
              "description" => "Driving a car alone is a major source of carbon emissions. Consider using public transport, carpooling, or walking/biking instead.",
              "options" => [
                [
                  "name" => "Personal car",
                  "description" => "Driving a car alone is a major source of carbon emissions. Consider using public transport, carpooling, or walking/biking instead."
                ],
                [
                  "name" => "Electric car",
                  "description" => "Electric cars are becoming more popular and produce fewer emissions compared to traditional gas-powered cars. However, the emissions from electricity generation must also be taken into account."
                ],
                [
                  "name" => "Air travel",
                  "description" => "Air travel is one of the most carbon-intensive forms of transportation. Consider reducing air travel, or using carbon offsets to mitigate the emissions."
                ],
                [
                  "name" => "Public transport",
                  "description" => "Taking public transport, such as buses or trains, can significantly reduce carbon emissions compared to driving alone."
                ]
              ]
            ],
            [
              "title" => "Home energy use",
              "description" => "The energy used to power and heat/cool our homes contributes to carbon emissions.",
              "options" => [
                [
                  "name" => "Solar panels",
                  "description" => "Installing solar panels can reduce or eliminate the carbon emissions associated with electricity generation from the grid."
                ],
                [
                  "name" => "Energy-efficient appliances",
                  "description" => "Using energy-efficient appliances, such as LED light bulbs and Energy Star certified devices, can reduce energy consumption and carbon emissions."
                ],
                [
                  "name" => "Smart thermostat",
                  "description" => "A smart thermostat can help reduce energy consumption and carbon emissions by automatically adjusting the temperature based on occupancy and time of day."
                ],
                [
                  "name" => "Home insulation",
                  "description" => "Properly insulating your home can help reduce the energy needed to heat or cool it, resulting in lower carbon emissions."
                ]
              ]
            ],
            [
              "title" => "Diet",
              "description" => "The production and transportation of food has a significant impact on carbon emissions.",
              "options" => [
                [
                  "name" => "Plant-based diet",
                  "description" => "Eating a plant-based diet can significantly reduce carbon emissions compared to a meat-heavy diet, as animal agriculture is a major source of greenhouse gas emissions."
                ],
                [
                  "name" => "Local and seasonal produce",
                  "description" => "Choosing produce that is grown locally and in season can reduce the emissions associated with transportation and refrigeration."
                ],
                [
                  "name" => "Reducing food waste",
                  "description" => "Food waste that ends up in landfills produces methane, a potent greenhouse gas. Reducing food waste can significantly reduce carbon emissions."
                ],
                [
                  "name" => "Organic food",
                  "description" => "Organic farming practices tend to be more environmentally friendly, but the carbon emissions associated with transportation and refrigeration may be higher."
                ]
              ]
            ],
            [
              "title" => "Goods and services",
              "description" => "The production and transportation of goods and services also contribute to carbon emissions.",
              "options" => [
                [
                  "name" => "Buying used goods",
                  "description" => "Buying used goods reduces the need for new production, which can result in lower carbon emissions."
                ],
                [
                  "name" => "Reducing packaging",
                  "description" => "Excessive packaging generates more"
                ]
              ]
            ]
        ];

        return $data;
          
    }

    public function calculate()
    {
        $array = json_encode($this->inputs);
        $messages[] = [
            'role' => 'user', 
            'content' => 'Calculate my carbon footprint based from this input: ' . $array
        ];

        Log::channel('openai')->info(json_encode($messages));

        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => $messages
        ]);

        // OpenAI returns choices array, so select the first one
        $content = $response['choices'][0]['message']['content'];

        Log::channel('openai')->info('CHATGPT Result');
        Log::channel('openai')->info($content);

        dd($content);
    }
}
