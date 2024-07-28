<?php 
    use App\Services\ComponentPage;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= ComponentPage::render("head"); ?>
    <title>404</title>
</head>
<body>
    <div class="w-[100%] sm:w-[50%] lg:w-[30%] absolute top-[30%] left-[50%] translate-x-[-50%] translate-y-[-30%] border-2 border-black rounded-lg p-10">
        <div class="text-center gap-5">
            <p class="lg:text-[40pt]">404</p>
            <p class="lg:text-[25pt]">Page Not Found</p>
        </div>
    </div>
</body>
</html>