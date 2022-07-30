<?php 
return [
  'labels' => [
    'title' => 'depreciation rules',
    'description' => 'Customize depreciation or retirement rules for assets',
    'rules' => 'depreciation rules',
    'Description Help' => 'The maximum period can be filled in. For example, 2 years means more than 2 years, and 5 years means more than 5 years. The rules will be matched first from high to low. First judge whether it exceeds 5 years, if not, then judge whether it exceeds 3 years. And so on.',
    'Rules Symbol' => 'Between 0.00 ~ 1.00',
  ],
  'fields' => [
    'name' => 'name',
    'description' => 'describe',
    'rules' => 'rule',
    'number' => 'cycle',
    'scale' => 'scale',
    'ratio' => 'ratio',
  ],
  'options' => [
  ],
];