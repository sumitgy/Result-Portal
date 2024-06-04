
<?php $__env->startSection('title','Marks'); ?>
<?php $__env->startSection('content'); ?>
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-card card pt-5 pr-5 pb-3 pl-5">
                        <form method="post" action="<?php echo e(route('marks_store')); ?>" style="display: contents;">
                        <?php echo csrf_field(); ?>
                            <div class="row card-body pt-0 pb-0">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pwd">Name :</label>
                                        <input class="form-control" type="text" name="name" placeholder="Enter Student name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pwd">Father name :</label>
                                        <input class="form-control" type="text" name="fname" placeholder="Enter Father's name">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row card-body pt-0 pb-0">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="pwd">College name :</label>
                                        <input class="form-control" type="text" name="clgname" placeholder="Enter college name">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row card-body pt-0 pb-0">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pwd">Medium :</label>
                                        <input class="form-control" type="text" name="medium" placeholder="Enter your medium">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pwd">RollNo. :</label>
                                        <input class="form-control" type="number" name="rollno" placeholder="Enter rollno.">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row card-body pt-0 pb-0">
                                <div class="col-md-6">  
                                    <div class="form-group">
                                        <label for="pwd">Branch :</label>
                                        
                                        <select class="form-control" name="branch" id="branch">
                                            <option selected>Select your branch</option>
                                            <option valuue="bca">BCA</option>
                                            <option valuue="mca">MCA</option>
                                            <option valuue="btech">B-TECH</option>
                                            <option valuue="mtech">M-TECH</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="pwd">Year :</label>
                                        <input class="form-control" type="text" name="year" placeholder="Enter year">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row card-footer">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pwd">Java :</label>
                                        <input class="form-control" type="text" name="java" placeholder="Enter marks">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pwd">PHP :</label>
                                        <input class="form-control" type="text" name="php" placeholder="Enter marks">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pwd">Data Structure :</label>
                                        <input class="form-control" type="text" name="dsa" placeholder="Enter marks">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pwd">E-commerce :</label>
                                        <input class="form-control" type="text" name="ecom" placeholder="Enter marks">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pwd">SDC :</label>
                                        <input class="form-control" type="text" name="sdc" placeholder="Enter marks">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pwd">Networking :</label>
                                        <input class="form-control" type="text" name="network" placeholder="Enter marks">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <input type="submit" name="submit" value="submit" class="btn btn-default" style="background:#003452; color:white;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sh\Desktop\Result-Portal\resources\views/Faculty/marks_form.blade.php ENDPATH**/ ?>