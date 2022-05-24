<!DOCTYPE html>
<html>
<head>
    <base href="{{ asset('/') }}">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Room</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{asset('livestream/styles/main.css')}}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{asset('livestream/styles/lobby.css')}}">
</head>
<body>

<header id="nav">
       <div class="nav--list">
            <button id="members__button">
               <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 18v1h-24v-1h24zm0-6v1h-24v-1h24zm0-6v1h-24v-1h24z" fill="#ede0e0"><path d="M24 19h-24v-1h24v1zm0-6h-24v-1h24v1zm0-6h-24v-1h24v1z"/></svg>
            </button>
            <a href="admin/dashboard"/>
                <h3 id="logo">
                    <img src="front/img/logo.png" alt="Logo">
                </h3>
            </a>
       </div>

        <div id="nav__links">
            <button id="chat__button"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" fill="#ede0e0" clip-rule="evenodd"><path d="M24 20h-3v4l-5.333-4h-7.667v-4h2v2h6.333l2.667 2v-2h3v-8.001h-2v-2h4v12.001zm-15.667-6l-5.333 4v-4h-3v-14.001l18 .001v14h-9.667zm-6.333-2h3v2l2.667-2h8.333v-10l-14-.001v10.001z"/></svg></button>
            <!-- <a class="nav__link" href="/">
                Lobby
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ede0e0" viewBox="0 0 24 24"><path d="M20 7.093v-5.093h-3v2.093l3 3zm4 5.907l-12-12-12 12h3v10h7v-5h4v5h7v-10h3zm-5 8h-3v-5h-8v5h-3v-10.26l7-6.912 7 6.99v10.182z"/></svg>
            </a> -->
            <span class="nav__link" id="create__room__btn" href="">
                {{Auth::user()->name}}
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ede0e0" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z"/></svg>
</span>
        </div>
    </header>

    <main id="room__lobby__container">
        
        <div id="form__container">
             <div id="form__container__header">
                 <p>Start LiveStream Room</p>
             </div>
 
 
            <form id="lobby__form">
 
                 <div class="form__field__wrapper">
                     <label>Your Name</label>
                     <input type="text" name="name" required placeholder="Enter your display name..." value="{{Auth::user()->name}}"/>
                 </div>
 
                 <div class="form__field__wrapper">
                     <button type="submit">Go to LiveStream 
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"/></svg>
                    </button>
                 </div>
            </form>
        </div>
     </main>
    
</body>
<script type="text/javascript" src="{{asset('livestream/js/lobby.js')}}"></script>
</html>