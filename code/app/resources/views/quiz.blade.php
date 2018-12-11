<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Quiz!</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Em um dia, que série melhor representa você?</h1>
        </div>
    </div>

    <form action="/quiz" method="post">

    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($questions as $question)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <h3>{{ $question['question'] }}</h3>
                    <ol type="a">
                        @foreach ($question->answers as $answer)
                            <div class="row">
                                <div class="col-md-12">
                                    <li>
                                        <div class="radio">
                                            <label><input type="radio" name="question-{{ $question['id'] }}" value="{{ $answer['letter'] }}"> {{ $answer['answer'] }}</label>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        @endforeach
                    </ol>
                </div>
            @endforeach
        </div>
        <div class="row next-button">
            <div class="offset-md-6 col-md-6 float-right">
                <button type="button" class="btn btn-success next">Próxima</button>
            </div>
        </div>
        <div class="row d-none send-button">
            <div class="offset-md-6 col-md-6 float-right">
                <button type="submit" class="btn btn-success send">Enviar</button>
            </div>
        </div>
    </div>

    </form>

    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Em um dia, que série melhor representa você?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="modal-text"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/script.js"></script>
</body>
</html>