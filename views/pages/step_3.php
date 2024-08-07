<?php 
    use App\Services\ComponentPage;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= ComponentPage::render("head"); ?>
    <title>Step #3: Chat</title>
</head>
<body>

    <div class="p-5 lg:w-[1000px] mx-auto">
        <header class="p-3 mt-3 border-[1px] border-black">
            <p class="text-[20pt]">Step #3</p>
            <p>Well, you were able to overcome another test, I hope it wasn't too difficult?</p>
            <p>Now you can chat with other chat participants and discuss the next challenge</p>
            <p>Your task is to write the correct answer to the question, which question can you ask correctly? You have to find it yourself</p>
        </header>
        
        <div class="p-3 mt-3 border-[1px] border-black min-h-[40vh] max-h-[65vh] items-right overflow-y-auto flex flex-col gap-3">
            <p class="border-[1px] border-black rounded-md p-1">Lorem ipsum dolor sit amet. <span></span></p>
        </div>

        <div class="p-3 mt-3 mb-5 border-[1px] border-black flex justify-between gap-5">
            <input type="text" placeholder="Message" class="p-2 w-[80%] border-[1px] border-black">
            <button class="w-[20%] p-2 border-[1px] border-black">Send</button>
        </div>
    </div>

</body>
</html>