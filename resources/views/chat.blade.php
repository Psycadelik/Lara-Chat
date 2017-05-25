<!Doctype html>
<html>
<head>
    <link rel="stylesheet" href="css/app.css">
    <title>Chat Room</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chat Room</div>

                <div class="panel-body">

                         <div id="app">
                     <h1></h1>
                        <!--<chat-message></chat-message> -->
                        <chat-log :messages="messages"></chat-log>
                        <chat-composer v-on:messagesent="addMessage"></chat-composer>
                </div>
            
                    <script src="js/app.js" charset="utf-8"></script>
           </div>
           </div>
           </div>
           </div>
           </div>
           
            </div>
</body>
</html>
