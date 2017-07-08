# api_spotify_basic_php

essa é uma API basica do spotify, feita com o framework codeigniter e padrão MVC, ela pega o token com os dados fornecidos, client_id e client_secret (esses dados são fornecidos pelo proprio spotify ),  com o token em mão você pode fazer consultas no spotify, fazer um search pelos artistas, albuns ou musicas e depois você pode clicar no link que foi retornado e ir para a pagina do spotify ( você precisa estar logado para ver os dados )

usei o CURL para requisitar os dados e foreach para iterar sobre os dados, é bem simples.

se você quiser dar uma olhada, procure por estes arquivos:

source files -> aplication -> controllers -> spotify.php
source files -> aplication -> models -> spotifyModel.php
source files -> aplication -> views -> mdbcomponent -> spotifyform.php