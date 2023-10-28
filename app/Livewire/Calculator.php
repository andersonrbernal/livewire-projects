<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public int $firstNumber = 0;
    public int $secondNumber = 0;
    public string $action = "+";
    public float $result = 0;
    public bool $disabled = false;

    public function render()
    {
        return view('livewire.calculator');
    }

    function calculate(): void
    {
        $firstNumber = (float) $this->firstNumber;
        $secondNumber = (float) $this->secondNumber;

        switch ($this->action) {
            case '-':
                $this->result = $firstNumber - $secondNumber;
                break;
            case '+':
                $this->result = $firstNumber + $secondNumber;
                break;
            case '/':
                $this->result = $firstNumber / $secondNumber;
                break;
            case '*':
                $this->result = $firstNumber * $secondNumber;
                break;
            case '%':
                $this->result = ($firstNumber / 100) * $secondNumber;
                break;
        }
    }

    function updated(string $property): bool
    {
        if ($this->firstNumber === '' || $this->secondNumber === "") {
            return $this->disabled  = true;
        }

        return $this->disabled = false;
    }
}
