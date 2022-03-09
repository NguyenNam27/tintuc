<?php $__env->startSection('content'); ?>

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Chỉnh sửa bài viết <a href="<?php echo e(route('admin.post.index')); ?>" class="btn bg-purple "><i
                        class="fa fa-plus"></i> Danh sách bài viết</a>

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> danh sách</a></li>
                <li><a href="#"> Chỉnh sửa bài viết </a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nhập thông tin bài viết mới</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" action="<?php echo e(route('admin.post.update',['edit'=>$editPost->id])); ?>"
                              method="post"
                              enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nhập tiêu đề bài viết mới</label>
                                        <input value="<?php echo e($editPost->title); ?>" type="text" class="form-control"
                                               name="title" id="title"
                                               placeholder="nhập tiêu đề">
                                        <?php if($errors->has('title')): ?>
                                            <label class="Text-red"
                                                   style="font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i><?php echo e($errors->first('title')); ?>

                                            </label>
                                        <?php endif; ?>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hình ảnh mới</label>
                                        <input type="file" id="image" name="image"><br>
                                        <img src="<?php echo e(asset($editPost->image)); ?> " width="100px" height="70px">
                                        <?php if($errors->has('image')): ?>
                                            <label class="Text-red"
                                                   style="font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i><?php echo e($errors->first('image')); ?>

                                            </label>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> Loại tin </label>
                                        <select class="form-control" name="subcategories_id">
                                            <option value="" >--Chọn danh mục--</option>

                                            <?php $__currentLoopData = $subcate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    value="<?php echo e($item->id); ?>" <?php echo e(($editPost->subcategories_id == $item->id) ? 'selected' : ''); ?>><?php echo e($item->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php if($errors->has('subcategories_id')): ?>
                                            <label class="Text-red"
                                                   style="font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i><?php echo e($errors->first('subcategories_id')); ?>

                                            </label>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Tin hot </label>
                                        <select class="form-control" name="hot">
                                            <option value=""><?php echo e(($editPost->hot == 1) ? 'Tin hot' : 'không'); ?></option>
                                            <option value="1">Tin hot</option>
                                            <option value="0">Không</option>
                                        </select>
                                        <?php if($errors->has('hot')): ?>
                                            <label class="Text-red"
                                                   style=" font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i><?php echo e($errors->first('hot')); ?>

                                            </label>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Tin nổi bật </label>
                                        <select class="form-control" name="highlights">
                                            <option value=""><?php echo e(($editPost->highlights == 1) ? 'Tin nổi bật' : 'không'); ?></option>
                                            <option value="1">Tin nổi bật</option>
                                            <option value="0">Không</option>
                                        </select>
                                        <?php if($errors->has('highlights')): ?>
                                            <label class="Text-red"
                                                   style=" font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i><?php echo e($errors->first('highlights')); ?>

                                            </label>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Tin tức mới </label>
                                        <select class="form-control" name="new_posts">
                                            <option value=""><?php echo e(($editPost->new_posts == 1) ? 'Tin mới' : 'không'); ?></option>
                                            <option value="1">Tin mới</option>
                                            <option value="0">Không</option>
                                        </select>
                                        <?php if($errors->has('new_posts')): ?>
                                            <label class="Text-red"
                                                   style=" font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i><?php echo e($errors->first('new_posts')); ?>

                                            </label>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Hoạt động </label>
                                        <select class="form-control" name="active">
                                            <option value=""><?php echo e(($editPost->active == 1) ? 'hiển thị' : 'không'); ?></option>
                                            <option value="1">Hiển thị</option>
                                            <option value="0">No</option>
                                        </select>
                                        <?php if($errors->has('new_posts')): ?>
                                            <label class="Text-red"
                                                   style=" font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i><?php echo e($errors->first('new_posts')); ?>

                                            </label>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Từ khoá tìm kiếm </label>
                                        <input value="<?php echo e($editPost->key_words); ?>" type="text" class="form-control"
                                               name="key_words" id="key_words">
                                        <?php if($errors->has('key_words')): ?>
                                            <label class="Text-red"
                                                   style=" font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i><?php echo e($errors->first('key_words')); ?>

                                            </label>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mô tả ngắn</label>
                                        <textarea type="email" class="form-control" name="description"
                                                  id="description"><?php echo e($editPost->description); ?></textarea>

                                        <?php if($errors->has('description')): ?>
                                            <label class="Text-red"
                                                   style="font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i><?php echo e($errors->first('description')); ?>

                                            </label>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nội dung</label>
                                        <textarea type="email" class="form-control" name="content"
                                                  id="content"><?php echo e($editPost->content); ?></textarea>

                                        <?php if($errors->has('content')): ?>
                                            <label class="Text-red"
                                                   style="font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i><?php echo e($errors->first('content')); ?>

                                            </label>
                                        <?php endif; ?>
                                    </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Vị trí </label>
                                            <select class="form-control" name="posittion">
                                                <option value=""><?php echo e(($editPost->posittion == 1) ? 'Vị trí bài viết mới' : 'không'); ?></option>
                                                <option value="1">bài viết mới</option>
                                                <option value="0">No</option>
                                            </select>
                                            <?php if($errors->has('posittion')): ?>
                                                <label class="Text-red"
                                                       style=" font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                    <i class="fa fa-info"></i><?php echo e($errors->first('posittion')); ?>

                                                </label>
                                            <?php endif; ?>
                                        </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="remember"> Check
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </section>


    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('my_js'); ?>
    
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <script type="text/javascript">
        $(function () {
            // CKEDITOR.replace('ckeditor');
            CKEDITOR.config.pasteFormWordPromptCleanup = true;
            CKEDITOR.config.pasteFormWordRemoveFontStyles = false;
            CKEDITOR.config.pasteFormWordRemoveStyles = false;
            CKEDITOR.config.language = 'vi';
            CKEDITOR.config.htmlEncodeOutput = false;
            CKEDITOR.config.ProcessHTMLEntities = false;
            CKEDITOR.config.entities = false;
            CKEDITOR.config.entities_latin = false;
            CKEDITOR.config.ForceSimpleAmpersand = true;
            CKEDITOR.replace('description');
            CKEDITOR.replace('content');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('BE.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>