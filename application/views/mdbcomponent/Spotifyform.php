
<form action="spotify/pega_dados" method="post">

<!--Naked Form-->
<div class="card-block">

    <!--Header-->
    <div class="text-center">
        <h3><i class="fa fa-search"></i><?= $message['title'] ?></h3>
        <hr class="mt-2 mb-2">
    </div>

    <!--Body-->
    <p><?= $message['intro'] ?>.</p>
    <br>

                <!--First row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <div class="md-form">
                                <input type="text" value="<?php echo isset($table_data['artista'])?$table_data['artista']:''?>" name="input_artista" id="form2" class="form-control">
                                <label for="form2">o que você procura ?</label>
                            </div>
                        </div>
                    </div>
                </div>


        <fieldset class="form-group">
            <input type="radio" name="input_type" value="artist" id="checkbox1">
            <label for="checkbox1">Artista</label>

            <input type="radio" name="input_type" value="album">
            <label for="checkbox11">Album</label>

            <input type="radio" name="input_type" value="track">
            <label for="checkbox4">Musica</label>
        </fieldset>



    <div class="text-center">
        <button class="btn btn-default">Submit</button>

</div>
    </div>


</form>