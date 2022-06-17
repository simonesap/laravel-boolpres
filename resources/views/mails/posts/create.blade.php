<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: gray;
        }

        ul {
            list-style-type: none;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            border-radius: 10px;
        }

        .bg_l_blue{
            background-color: lightblue;
        }

        .m_3{
            margin: 5px;
        }
    </style>
</head>
<body>

    <div class="container bg_l_blue">
        <h2 class="m_3">Ciao hai creato un post che si chiama: {{$post->title}}</h2>
        <img src="{{ asset("storage/$post->image")}}" alt="">

        <ul class="m_3">
            <li class="m_3">
                <p>Categoria: {{$post->category->label}}</p>
            </li>
            {{-- in questo caso è post in relazione a tag --}}
            @forelse ( $post->tags as $tag)
                <li class="m_3">
                    <p>
                        Hai associato il tag - {{ $tag->label }} - a questo post!
                    </p>
                </li>
            @empty

            @endforelse
        </ul>

    </div>


</body>
</html>
