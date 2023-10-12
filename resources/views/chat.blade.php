@extends('web.layouts.app')

<!-- resources/views/layouts/app.blade.php -->

<style>
    .chat {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .chat li {
        margin-bottom: 10px;
        padding-bottom: 5px;
        border-bottom: 1px dotted #B3A9A9;
    }

    .chat li .chat-body p {
        margin: 0;
        color: #777777;
    }

    .panel-body {
        overflow-y: scroll;
        height: 350px;
    }



</style>

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Chats</div>

                    <div class="panel-body">
                        <chat-messages :messages="messages"></chat-messages>
                    </div>
                    <div class="panel-footer">
                        {{-- <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form> --}}
                        <chat-form @messagesent="addMessage" :user="{ ... }"></chat-form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
