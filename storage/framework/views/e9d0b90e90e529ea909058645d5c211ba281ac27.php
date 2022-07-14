<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="card card-primary card-outline" style = "overflow-x:hidden;overflow-y:scroll;">
        <div class="card-header">
            <h5 style="text-align:center;font-weight: bold;">
               Cipta Latihan
            </h5>
        </div>
        <div class="card-body">

            <form action="/latihan" method="POST">
            <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title" style="font-weight: normal;">Nama Latihan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description" style="font-weight: normal;">Keterangan Latihan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="tarikhlatihan" style="font-weight: normal;">Tarikh Latihan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="tarikhlatihan" name="tarikhlatihan">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="custom-file-label" for="gambarName">Gambar Poster</label>
                            <input type="file" class="custom-file-input" id="gambarName">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Hantar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>
<script>

  $(function () {
        //Date picker
        $('#tarikhlatihan').datepicker({
        autoclose: true
        })
    })

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\planet\resources\views/latihan/index.blade.php ENDPATH**/ ?>