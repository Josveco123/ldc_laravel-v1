<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Productos;


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* 0*/
        Productos::create([
            'codigo' => 'A001',
            'nombre' => 'Artrixin gel',
            'presentacion' => 'Display x 25 sobres x 12g',
            'slogan' => '“Para inflamación y dolor Artrixin gel es lo mejor”',
            'imagen' => 'artrixinsobrei.jpg',
            'ficha' => 'artrixinsobref.jpg',
        ]);
        /* 1*/
        Productos::create([
            'nombre' => 'Artrixin Gel',
            'presentacion' => 'Tubo x 30g',
            'slogan' => '“Para inflamación y dolor Artrixin gel es lo mejor”',
            'imagen' => 'artrixincremai.jpg',
            'ficha' => 'artrixincremaf.jpg',
        ]);
        /* 2*/
        Productos::create([
            'nombre' => 'Nomante pastillas',
            'presentacion' => 'Caja x 24 sobres x 4 pastillas',
            'slogan' => '“Garganta fresca y despejada Nomante es la indicada””',
            'imagen' => 'nomantei.jpg',
            'ficha' => 'nomantef.jpg',
        ]);
        /* 3*/
        Productos::create([
            'nombre' => 'Aceite de Almendra',
            'presentacion' => 'Frasco x 30ml',
            'slogan' => '“******”',
            'imagen' => 'aceitedealmendrai.jpg',
            'ficha' => 'aceitedealmendraf.jpg',
        ]);
        /* 4*/
        Productos::create([
            'nombre' => 'Aceite de Coco',
            'presentacion' => 'Frasco x 30ml',
            'slogan' =>  '“******”',
            'imagen' => 'aceitedecocoi.jpg',
            'ficha' => 'aceitedecocof.jpg',
        ]);
        /* 5*/
        Productos::create([
            'nombre' => 'Aceite de Comer',
            'presentacion' => 'Frasco x 30ml',
            'slogan' => '******',
            'imagen' => 'aceitedecomeri.jpg',
            'ficha' => 'aceitedecomerf.jpg',
        ]);
        /* 6*/
        Productos::create([
            'nombre' => 'Acido Borico',
            'presentacion' => 'Caja x 25 sobres x 10g',
            'slogan' =>  '“******”',
            'imagen' => 'acidoboricoi.jpg',
            'ficha' => 'acidoboricof.jpg',
        ]);
        /* 7*/
        Productos::create([
            'nombre' => 'Acido Salicilico',
            'presentacion' => 'Caja x 25 sobres x 7g',
            'slogan' =>  '“******”',
            'imagen' => 'acidosalicilicoi.jpg',
            'ficha' => 'acidosalicilicof.jpg',
        ]);
        /* 8*/
        Productos::create([
            'nombre' => 'Alcanfor',
            'presentacion' => 'Caja x 25 sobres x 7g',
            'slogan' =>  '“******”',
            'imagen' => 'alcanfori.jpg',
            'ficha' => 'alcanforf.jpg',
        ]);
        /* 9*/
        Productos::create([
            'nombre' => 'Alumbre',
            'presentacion' => ' Caja x 25 sobres x 20g',
            'slogan' =>  '“******”',
            'imagen' => 'alumbrei.jpg',
            'ficha' => 'alumbref.jpg',
        ]);
        /* 10*/
        Productos::create([
            'nombre' => 'Azucar de leche',
            'presentacion' => 'Caja x 25 sobres x 10g',
            'slogan' =>  '“******”',
            'imagen' => 'azucardelechei.jpg',
            'ficha' => 'azucardelechef.jpg',
        ]);
        /* 11*/
        Productos::create([
            'nombre' => 'Bicarbonato de sodio',
            'presentacion' => 'Caja x 25 sobres x 20g',
            'slogan' =>  '“******”',
            'imagen' => 'bicarbonatoi.jpg',
            'ficha' => 'bicarbonatof.jpg',
        ]);
        /* 12*/
        Productos::create([
            'nombre' => 'Glicerina',
            'presentacion' => 'Frasco x 30ml',
            'slogan' =>  '“******”',
            'imagen' => 'glicerinai.jpg',
            'ficha' => 'glicerinaf.jpg',
        ]);
        /* 13*/
        Productos::create([
            'nombre' => 'Sal de Epsom',
            'presentacion' => 'Caja x 25 sobres x20g',
            'slogan' =>  '“******”',
            'imagen' => 'salepsoni.jpg',
            'ficha' => 'salepsonf.jpg',
        ]);
        /* 14*/
        Productos::create([
            'nombre' => 'Sal Glauber',
            'presentacion' => 'Caja x 25 sobres x 20g',
            'slogan' =>  '“******”',
            'imagen' => 'salglouberi.jpg',
            'ficha' => 'salglouberf.jpg',
        ]);
        /* 15*/
        Productos::create([
            'nombre' => 'Vaselina Pura',
            'presentacion' => 'Pote x 20g, y x 100g',
            'slogan' =>  '“******”',
            'imagen' => 'vacelinai.jpg',
            'ficha' => 'vacelinaf.jpg',
        ]);

    }
}
