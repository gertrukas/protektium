<?php

namespace App\Livewire;

use App\Mail\ContactReceived;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';

    public $email = '';

    public $phone = '';

    public $comments = '';

    public $successMessage = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'comments' => 'required|string|max:1000',
    ];

    protected $messages = [
        'name.required' => 'El nombre es obligatorio.',
        'email.required' => 'El correo electrónico es obligatorio.',
        'email.email' => 'El correo electrónico debe ser válido.',
        'phone.required' => 'El teléfono es obligatorio.',
        'comments.required' => 'Los comentarios son obligatorios.',
    ];


    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submit()
    {
        $this->validate();

        try {
            // Guardar en la base de datos
            Contact::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'comments' => $this->comments,
                'is_read' => false,
            ]);

            // Enviar correos
            $contactEmail = env('MAIL_CONTACT_ADDRESS', 'contacto@electronicadosmil.com');

            // Correo a la empresa
            Mail::to($contactEmail)->send(
                new ContactReceived(
                    $this->name,
                    $this->email,
                    $this->phone,
                    $this->comments
                )
            );

            // Correo al cliente
            Mail::to($this->email)->send(
                new ContactReceived(
                    $this->name,
                    $this->email,
                    $this->phone,
                    $this->comments
                )
            );

            $this->successMessage = '¡Gracias por contactarnos! Te responderemos pronto.';

            $this->reset(['name', 'email', 'phone', 'comments']);
        } catch (\Exception $e) {
            // Registrar el error en los logs
            Log::error('Error al procesar el formulario de contacto: ' . $e->getMessage());

            // Mostrar mensaje de error al usuario
            $this->successMessage = '';
            Log::info('Error: ' . $e);

            session()->flash('error', 'Hubo un error al enviar tu mensaje. Por favor, intenta nuevamente o contáctanos directamente.');
        }
    }
}
