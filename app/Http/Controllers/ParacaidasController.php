<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;
use PhpParser\Node\Stmt\Echo_;

class ParacaidasController extends Controller
{
   public function formulario_buscador(){
       //mostramos el formulario del metabuscador
       return view("metabuscador");

   }
   public function buscar(){
        echo "<pre>";
        //1.alamacernar los datos transmitidos enotras variables
        $termino=$_POST["termino"];
        $motores=$_POST["motores"];
        //2.determinar el motor elegido
        switch($motores){
                    case 1://redireccionar a google
                        return redirect()->to("https://www.google.com/search?q=$termino");
                    break;

                    case 2:// redireccionar a bing
                        return redirect()->to("https://www.bing.com/search?q=$termino");
                    break;

                    case 3:// Yahoo
                        return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                    break;

                    case 4:// Baidu
                        return redirect()->to("https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&tn=baidu&wd=$termino");
                    break;

                    case 5:// Daum
                        return redirect()->to("https://search.daum.net/search?w=tot&DA=YZR&t__nil_searchbox=btn&sug=&sugo=&sq=&o=&q=$termino");
                    break;

                    case 6:// Yandex
                        return redirect()->to("https://yandex.com/video/search?from=tabbar&text=$termino");
                    break;

                    case 7:// Ask
                        return redirect()->to("https://www.search.ask.com/web?q=$termino");
                    break;

                    case 8:// Ecosia
                        return redirect()->to("https://www.ecosia.org/search?q=$termino");
                    break;

                    case 9:// Aol
                        return redirect()->to("https://search.aol.com/aol/search;_ylt=AwrE1.AzG6VgfcUAwQ5oCWVH;_ylc=X1MDMTE5NzgwMzg4MARfcgMyBGZyAwRmcjIDc2ItdG9wLXNlYXJjaARncHJpZAMyWlZOWUpoOVNKLkx4WGdvNlVZTnlBBG5fcnNsdAMwBG5fc3VnZwMxMARvcmlnaW4Dc2VhcmNoLmFvbC5jb20EcG9zAzAEcHFzdHIDBHBxc3RybAMwBHFzdHJsAzYEcXVlcnkDQ2Fycm9zBHRfc3RtcAMxNjIxNDMzMTQw?q=$termino");
                    break;

                    case 10:// Goo
                        return redirect()->to("https://search.goo.ne.jp/web.jsp?MT=$termino");
                    break;
        }
        echo "</pre>";
   } // NOS IDICA LO QUE TIENE EL ARREGLO
}
