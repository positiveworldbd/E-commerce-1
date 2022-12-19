<?php
$page_title = "Category";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $page_title; ?></title>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <!-- MAIN PANEL START-->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="title">
                            <h2 class="text-center py-5  display-3">Add Category</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-4">
                        <div class="category__from">
                            <form action="">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" name="category" id="category" placeholder="Write category name" class="form-control rounded-sm">
                                        </div>
                                        <input type="submit" value="Add Category" name="submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MAIN PANEL START-->
        <!-- container-scroller -->
        @include('admin.script')
</body>

</html>