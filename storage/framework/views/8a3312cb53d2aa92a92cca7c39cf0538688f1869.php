<?php $__env->startSection('contenu'); ?>
    <main class="container-fluid">
        <div class="row center-block">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <ul class="col-sm-12 col-md-12 text-center list-unstyled"  id="Contracts">
                    <li>
                        <label for="All-Contracts">Sélectionnez une station ou cliquez sur la carte</label>
                    </li>
                    <li>
                        <select class="form-control col-md-5 " name="select" id="All-Contracts">
                            <?php $__currentLoopData = $stations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $station): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option id="<?php echo e($station->StationNumber); ?>" value="<?php echo e($station->StationNumber); ?>"><?php echo e($station->Name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
            </div>
            <div id="map">
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>