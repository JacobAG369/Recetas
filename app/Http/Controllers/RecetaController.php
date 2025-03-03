<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function mostrar($nombre)
    {
        $recetas = [
            'tacos-pastor' => [
                'nombre' => 'Tacos al Pastor',
                'imagen' => 'tacos-pastor.jpg',
                'descripcion' => 'Deliciosos tacos al pastor con piña y especias.',
                'ingredientes' => [
                    '500g de carne de cerdo',
                    'Tortillas de maíz',
                    '1 taza de piña picada',
                    'Especias al gusto (achiote, comino, orégano)',
                    'Cilantro y cebolla picada'
                ],
                'procedimiento' => [
                    'Marinar la carne con especias y dejar reposar por 2 horas.',
                    'Cocinar la carne en un sartén hasta que esté bien dorada.',
                    'Calentar las tortillas en un comal.',
                    'Servir la carne en las tortillas con piña, cilantro y cebolla.',
                    'Acompañar con limón y salsa al gusto.'
                ]
            ],
            'elotes' => [
                'nombre' => 'Elotes',
                'imagen' => 'esquimal.jpg',
                'descripcion' => 'Ricos elotes tipo esquimal con chile.',
                'ingredientes' => [
                    '4 elotes',
                    '2 cucharadas de mantequilla',
                    'Chile en polvo al gusto',
                    'Mayonesa y queso rallado'
                ],
                'procedimiento' => [
                    'Cocer los elotes en agua con sal durante 15 minutos.',
                    'Untarles mantequilla mientras están calientes.',
                    'Añadir mayonesa, queso rallado y chile en polvo al gusto.',
                    'Servir caliente y disfrutar.'
                ]
            ],
            'hamburguesa' => [
                'nombre' => 'Hamburguesa Doble Carne',
                'imagen' => 'hamburguesa.jpg',
                'descripcion' => 'Deliciosa hamburguesa con doble carne y queso.',
                'ingredientes' => [
                    '2 panes de hamburguesa',
                    '2 hamburguesas de carne de res',
                    '2 rebanadas de queso cheddar',
                    'Lechuga, tomate y cebolla',
                    'Salsa y mayonesa al gusto'
                ],
                'procedimiento' => [
                    'Cocinar las hamburguesas en un sartén hasta que estén bien doradas.',
                    'Colocar una rebanada de queso sobre cada carne y dejar que se derrita.',
                    'Tostar ligeramente los panes de hamburguesa.',
                    'Armar la hamburguesa con lechuga, tomate, cebolla y salsa al gusto.',
                    'Servir caliente y disfrutar.'
                ]
            ],
            'macarrones-queso' => [
                'nombre' => 'Macarrones con Queso',
                'imagen' => 'macarrones-queso.jpg',
                'descripcion' => 'Deliciosos macarrones con queso y chipotle con porción de res.',
                'ingredientes' => [
                    '250g de pasta corta',
                    '1 taza de queso cheddar rallado',
                    '1 taza de leche',
                    '2 cucharadas de mantequilla',
                    '1 cucharada de chipotle en adobo'
                ],
                'procedimiento' => [
                    'Cocinar la pasta en agua con sal hasta que esté al dente.',
                    'En una sartén, derretir la mantequilla y agregar la leche y el queso cheddar.',
                    'Remover hasta que el queso se derrita completamente.',
                    'Añadir el chipotle y mezclar bien.',
                    'Incorporar la pasta cocida y revolver hasta que esté bien cubierta de salsa.',
                    'Servir caliente y disfrutar.'
                ]
            ],
            'pizza-carnes' => [
                'nombre' => 'Pizza Carnes Frías',
                'imagen' => 'pizza-carnes.jpg',
                'descripcion' => 'Rica pizza con carnes frías para tres personas.',
                'ingredientes' => [
                    '1 base de pizza',
                    '1/2 taza de salsa de tomate',
                    '1 taza de queso mozzarella rallado',
                    '100g de pepperoni',
                    '100g de jamón'
                ],
                'procedimiento' => [
                    'Precalentar el horno a 200°C.',
                    'Extender la salsa de tomate sobre la base de pizza.',
                    'Distribuir el queso mozzarella de manera uniforme.',
                    'Agregar las carnes frías (pepperoni y jamón).',
                    'Hornear por 15 minutos o hasta que el queso esté derretido y dorado.',
                    'Servir caliente y disfrutar.'
                ]
            ],
            'tacos-barbacoa' => [
                'nombre' => 'Tacos de Barbacoa',
                'imagen' => 'tacos-barbacoa.jpg',
                'descripcion' => 'Ricos tacos de barbacoa para acompañar con consomé.',
                'ingredientes' => [
                    '500g de carne de borrego',
                    'Tortillas de maíz',
                    '1 taza de caldo de barbacoa',
                    'Cilantro y cebolla picada',
                    'Limón y salsa al gusto'
                ],
                'procedimiento' => [
                    'Cocer la carne en una olla de presión por 2 horas hasta que esté suave.',
                    'Deshebrar la carne y servir con tortillas calientes.',
                    'Acompañar con cilantro, cebolla, limón y salsa al gusto.',
                    'Servir con un poco de caldo de barbacoa.'
                ]
            ],
            'wrap-mixto' => [
                'nombre' => 'Wrap Mixto',
                'imagen' => 'wrap-mixto.jpg',
                'descripcion' => 'Rico wrap mixto con arrachera y ensalada.',
                'ingredientes' => [
                    'Tortilla de harina',
                    '150g de arrachera asada',
                    'Lechuga picada',
                    'Zanahoria rallada',
                    'Mayonesa y mostaza'
                ],
                'procedimiento' => [
                    'Asar la arrachera hasta que esté bien cocida.',
                    'Calentar la tortilla de harina en un comal.',
                    'Untar la tortilla con mayonesa y mostaza.',
                    'Añadir la carne de arrachera en tiras y las verduras.',
                    'Enrollar bien el wrap y cortar por la mitad.',
                    'Servir y disfrutar.'
                ]

            ],

            'pozole' => [
                'nombre' => 'Pozole',
                'imagen' => 'pozole.jpg',
                'descripcion' => 'Un caldo tradicional rojo mexicano con maíz y carne de cerdo.',
                'ingredientes' => [
                    '500g de carne de cerdo',
                    '2 tazas de maíz pozolero',
                    '3 chiles guajillo',
                    '1 cebolla',
                    'Orégano y sal al gusto'
                ],
                'procedimiento' => [
                    'Cocer la carne de cerdo en una olla con agua, sal y cebolla por 1 hora.',
                    'Remojar los chiles guajillo en agua caliente, licuar con ajo y colar.',
                    'Agregar el maíz pozolero a la carne cocida y dejar hervir por 30 minutos.',
                    'Añadir la salsa de chile guajillo y cocinar por 20 minutos más.',
                    'Servir caliente con orégano, rábanos, lechuga y limón al gusto.'
                ]
            ],
            'chiles-ennogada' => [
                'nombre' => 'Chiles en Nogada',
                'imagen' => 'chiles-ennogada.jpg',
                'descripcion' => 'Chiles poblanos rellenos de picadillo, cubiertos con nogada.',
                'ingredientes' => [
                    '4 chiles poblanos',
                    '300g de carne de res molida',
                    '100g de frutas secas (manzana, pera, durazno)',
                    '100g de nuez molida',
                    'Queso crema y leche para la nogada'
                ],
                'procedimiento' => [
                    'Asar los chiles poblanos en un comal hasta que la piel esté quemada.',
                    'Colocar los chiles en una bolsa y dejarlos reposar 10 minutos, luego pelar y desvenar.',
                    'Cocinar la carne molida con cebolla y ajo, agregar las frutas secas picadas y sazonar.',
                    'Rellenar los chiles con la mezcla de carne y frutas.',
                    'Licuar el queso crema con la nuez y leche hasta obtener una salsa homogénea.',
                    'Servir los chiles bañados con la nogada y decorar con granada y perejil.'
                ]
            ]


        ];

        if (!array_key_exists($nombre, $recetas)) {
            abort(404);
        }

        return view('receta', ['receta' => $recetas[$nombre]]);
    }
}

