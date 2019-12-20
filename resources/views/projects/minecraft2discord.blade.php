@extends('project_layout')

@section('description')
    <div class="">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-8 col-xl-6">
                <div class="intro">
                    <img src="{{asset('img/projects/minecraft2discord/header.png')}}" alt="Minecraft2Discord">
                    <h3>A simple minecraft mod, server side only, to link the chat with your Discord server.</h3>
                </div>
                <div class="text">
                    <h5>→ Features</h5>
                    <p>→ Want to try ? There is a demo on my <a href="{{ config('links.discord') }}">discord server</a> !</p>
                    <p>→ Send Minecraft chat messages in discord :</p>
                    <figure>
                        <img src="{{asset('img/projects/minecraft2discord/from_minecraft.png')}}">
                        <figcaption>From Minecraft</figcaption>
                    </figure>
                    <p>→ Send discord messages in minecraft chat :</p>
                    <figure>
                        <img src="{{asset('img/projects/minecraft2discord/to_minecraft.png')}}">
                        <figcaption>To Minecraft</figcaption>
                    </figure>
                    <p>→ Send Join / Left / Death / Advancement messages in a discord channel :</p>
                    <figure>
                        <img src="{{asset('img/projects/minecraft2discord/to_minecraft.png')}}">
                        <figcaption>Join / Left / Advancement</figcaption>
                    </figure>
                    <p>→ Send server start / stop in a discord channel</p>
                    <p>→ Send message from your mod to discord : Documentation here</p>
                    <p>→ Configure every messages from the config file</p>

                    <h5>→ Discord</h5>
                    <p>I created a discord server in order to give help and chat. Feel free to join if you have any issue, any questions or any suggestions. You can found a demo server available on it</p>
                    <a href="{{ config('links.discord') }}"><img src="https://discordapp.com/assets/e4923594e694a21542a489471ecffa50.svg" style="width: 50%; margin: 0px"></a>

                    <h5>→ Installation</h5>
                    <p>1) Place the jar in the server "mods" folder (no need on client side).</p>
                    <p>2) Launch the server to generate config file.</p>
                    <p>3) Go to /config folder and edit "minecraft2discord-common.toml".</p>
                    <p>4) Place your discord bot TOKEN in "botToken" => Go here if you don't know how to have one.</p>
                    <p>5) Place discord channel id that will get all message in chat under "chat".</p>
                    <p>6) Place discord channel id that will get Join / Left / Death/ Advancement under "info".</p>
                    <p>7) Toggle "showJoinLeftMessages", "showAdvancementMessages", "showDeathMessages" to activate or deactivate some functionality.</p>
                    <p>8) Ensure your bot has the read_messages, send_message and manage_webhooks permission. Otherwise you can give the Administrator permission (not recommended).</p>
                    <p>9) Restart your server and enjoy!</p>

                    <h5>→ Vidéo tutorial</h5>
                    <div align="center" style="overflow: hidden;">
                        <iframe width="560" height="315" align="middle" src="https://www.youtube.com/embed/e0xEauQAnjg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>


                    <h5>→ Misc</h5>
                    <p><strong>Can I use this mod in my mod pack / make a video on this mod ?</strong></p>
                    <p>Yes, just remember to give credit and link back to the official download page on my <a href="{{ url()->current() }}">website</a> or on <a href="https://www.curseforge.com/minecraft/mc-mods/minecraft2discord">curseforge</a>, since they're the only links that are SAFE. You can use the mod freely, and put it in every modpack you want. You just need to put a link to this page, in the place where you tell people the mods in your modpack. If you make a video on this mod make sur to put a link to this page in the decription of the video.</p>
                    <br>
                    <p><i>This project is not affiliated with Discord in any way.</i></p>
                    <br>
                    <br>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="float-right" style="position: fixed; margin-top: 20px; right: 10px">
                    <div class="card text-white" style="background-color: #2471a3">
                        <div class="card-header">
                            <i class="fa fa-download"></i> DOWNLOAD FOR MINECRAFT2DISCORD
                        </div>
                        <div class="list-group list-group-flush text-body" style="cursor: pointer;">
                            @foreach(config('projects')[0]['versions'] as $version => $link)
                                <a class="list-group-item list-group-item-action" href="{{ config('links.ads_url') . $link }}">Minecraft {{ $version }}</a>
                            @endforeach
                            <a class="list-group-item list-group-item-action" href="#">See all download</a>
                        </div>
                    </div>
                    <div class="card text-white" style="background-color: #2471a3; margin-top: 20px">
                        <div class="card-header">
                            <i class="fa fa-download"></i> LINKS
                        </div>
                        <div class="list-group list-group-flush text-body" style="cursor: pointer;">
                            <a class="list-group-item list-group-item-action" href="{{ config('projects')[0]['github'] }}">Source code / Github</a>
                            <a class="list-group-item list-group-item-action" href="{{ config('projects')[0]['curseforge'] }}">Curseforge page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description">

    </div>



@endsection
