<?php
// creare la classe Form con la proprietà che contiene l'HTML del form
// i metodi per aggiungere labels ed inputs
// un metodo per renderizzare il form
// e un costruttore per passare gli attributi del form

//con questo genero una classe a oggetti
class Form
{
    //assegno le mie variabili in maniera private in modo da non permettere eventuali bugt
    private $method;
    private $action;
    private $formBody = '';//qui andrò a concatenare tutti i valori del input

    public function __construct($method, $action)//con questa funzione do i due parametri per la costruzione del oggetto
    {
        $this->method = $method;
        $this->action = $action;
    }

    public function addLabel($text, $id)//con questa funzione aggiungo html label al form
    {
        $this->formBody .= "<label for=\"$id\">$text</label>";
    }

    public function addInput($type, $name, $id, $value = '')//con questa funzione aggiungo html input al form
    {
        $this->formBody .= "<input type=\"$type\" id=\"$id\" name=\"$name\" value=\"$value\">";
    }

    public function addSumbit($text)//con questo aggiungo il button al form 
    {
        $this->formBody .= "<button>$text</button>";
    }

    public function render()//questa è la funzione per renderizzare il form completo nella html e poi nella pagina 
    {
        return "
            <form action=\"$this->action\" method=\"$this->method\">
                $this->formBody
            </form>
        ";
    }
}