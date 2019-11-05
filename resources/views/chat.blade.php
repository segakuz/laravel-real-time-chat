<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
    <style>
        .chat-container {
            max-width: 800px;
        }
        .chat {
            width: 100%;
            height: 90vh;
            margin-top: 5vh;
        }
        .chat-body {
            overflow-y: scroll;
        }
    </style>
</head>

<body>

    <div class="container chat-container">
        <div class="row" id="app">

            <div class="card chat">

                <div class="card-header">
                    <h1 class="d-inline">Chat room</h1>
                    <span class="badge badge-pill badge-secondary ml-1" v-cloak>@{{ numberOfUsers }}</span>
                    <span class="btn btn-danger btn-sm float-right" @click="deleteSession">Delete</span>
                </div>

                <div class="card-body chat-body" v-chat-scroll>
                    <div>

                        <message v-for="value,index in chat.message"
                        :key=value.index
                        :color=chat.color[index]
                        :user=chat.user[index]
                        :time=chat.time[index]
                        v-cloak>
                            @{{ value }}
                        </message>

                    </div>
                    <div class="badge badge-pill badge-primary">@{{ typing }}</div>
                </div>

                <div class="card-footer">
                    <input type="text" class="form-control" placeholder="Type your message here ..." v-model="message"
                    @keyup.enter="send">
                </div>

            </div>

        </div>
    </div>


    <script src="{{ 'js/app.js' }}"></script>
</body>

</html>
