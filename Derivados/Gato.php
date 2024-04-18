<?php

class Gato extends Animal
{
    public function fazerBarulho()
    {
        echo <<<HTML
            <audio id="audio" autoplay controls>
                <source src="./Audios/cat.mp3" type="audio/mp3">
            </audio>
        HTML;
    }
}