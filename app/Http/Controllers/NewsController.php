<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    function index($news){
        return view('layouts.news', [
            'judul' => $news,
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices placerat malesuada. Mauris vel vestibulum nisl. Curabitur ut imperdiet nunc, ut ornare ante. Praesent sit amet mattis dolor. Quisque et rutrum nisl. In a nisi eget tellus porta consequat. Nullam congue lobortis tempor. In elementum orci ipsum, volutpat venenatis justo sodales quis. Fusce leo justo, pretium nec velit imperdiet, rutrum accumsan libero.
            Donec et nisl malesuada nunc ultricies aliquam. Curabitur fermentum, sapien id hendrerit dignissim, quam mi commodo dolor, id pretium nisl massa quis est. Duis aliquam dolor tellus, ac vehicula mauris iaculis efficitur. Pellentesque leo ante, volutpat non feugiat sit amet, sagittis eu nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vehicula enim in ante sollicitudin sodales. <br><br> Praesent aliquet lacus mattis orci tincidunt iaculis. Vestibulum egestas molestie vehicula. Nunc finibus facilisis magna ac sagittis.
            Aliquam placerat pulvinar nisi nec convallis. Phasellus commodo metus lacus, vel condimentum nunc efficitur pharetra. Ut sit amet lectus congue, interdum velit vitae, euismod dolor. Morbi neque nunc, consectetur id lectus sed, ultricies tempus arcu. Donec egestas porta ultricies. Integer quam arcu, consectetur condimentum lorem id, ultrices commodo tortor. Nunc eget neque purus. Nam eros tortor, dapibus ut urna porta, consectetur ultricies risus. Fusce aliquet dolor eu lorem vehicula fermentum. Integer hendrerit mattis lorem a finibus. Nulla facilisi. Curabitur mi lorem, malesuada a fringilla id, vestibulum id nibh. Integer iaculis sagittis tortor, quis iaculis elit rhoncus a. Pellentesque laoreet nisi justo, ac lacinia nisi dignissim eu. Maecenas luctus neque malesuada, posuere felis sed, imperdiet diam. Proin tristique sagittis nisi.
            '
        ]);
    }
}
