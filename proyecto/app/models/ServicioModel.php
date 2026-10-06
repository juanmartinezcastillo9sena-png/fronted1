<?php
// Modelo: datos de ejemplo para la interfaz (reemplazables por BD más adelante)
class ServicioModel
{
    public function todos(): array
    {
        return [
            ['titulo' => 'Administración de patrimonio', 'texto' => 'Custodia y manejo de tus bienes con reportes claros y periódicos.'],
            ['titulo' => 'Fideicomisos', 'texto' => 'Estructuras a tu medida para proteger, heredar o invertir con reglas definidas.'],
            ['titulo' => 'Inversiones', 'texto' => 'Portafolios acordes a tu perfil, con seguimiento y metas a la vista.'],
            ['titulo' => 'Asesoría personalizada', 'texto' => 'Un asesor asignado que responde por tu caso de principio a fin.'],
        ];
    }

    public function pasos(): array
    {
        return [
            'Cuéntanos tu situación y lo que quieres lograr.',
            'Recibe una propuesta con costos y plazos por escrito.',
            'Firma y haz seguimiento desde tu cuenta.',
        ];
    }
}
