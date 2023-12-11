<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function indexchat()
    {
        $chat = DB::table('chat')->get();

        foreach ($chat as $c) {
            $kata = explode(" ", $c->chat_pesan);

            $ubahkata = [];

            foreach ($kata as $k) {
                switch($k){
                    case ":))":
                        $imagePath = "/1.png";
                        $ubah[] = "<img src='$imagePath' alt=':))' class='emot' />";
                        break;
                    case ":3":
                        $imagePath = "/2.png";
                        $ubah[] = "<img src='$imagePath' alt=':3' class='emot'/>";
                        break;
                    case ":P":
                        $imagePath = "/3.png";
                        $ubah[] = "<img src='$imagePath' alt=':P' class='emot'/>";
                        break;
                    case ":C":
                        $imagePath = "/4.png";
                        $ubah[] = "<img src='$imagePath' alt=':C' class='emot'/>";
                        break;
                    case ";)":
                        $imagePath = "/5.png";
                        $ubah[] = "<img src='$imagePath' alt=';)' class='emot'/>";
                        break;
                    default:
                        $ubah[] = $k;
                        break;
                }
            }

            $c->chat_pesan = implode(" ", $ubah);
        }
        return view('/indexchat', ['chat' => $chat]);
    }
}
