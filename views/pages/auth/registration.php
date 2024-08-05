<?php 
    use App\Services\ComponentPage;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= ComponentPage::render("head"); ?>
    <title>Step #2: Register page</title>
</head>
<body>
    <p id="error_message" class="mt-10 text-[#FF7A7A] text-[20px] md:text-[25pt] text-center px-20"></p>

    <div class="w-[100%] sm:w-[70%] lg:w-[30%] absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] p-5 flex flex-col gap-5">
        <div class="">
            <p class="text-[20pt]">Step #2</p>
            <p>Great, step #1 is done, is it time for you to register?.</p>
        </div>
        <form id="form" class="px-3 py-4 border-[1px] border-black rounded-lg flex flex-col gap-5">
            <input type="text" placeholder="Enter your login" name="login" class="border-[1px] border-black rounded-md p-2 bg-white">
            <input type="password" placeholder="Enter your password" name="password" class="border-[1px] border-black rounded-md p-2 bg-white">
            <button id="form_register" class="border-[1px] border-black rounded-md p-2 bg-white text-black">Button</button>
        </form>
    </div>

    <script>
        document.getElementById("form").addEventListener("submit", (e) => {
            e.preventDefault();
            const form = document.querySelector("form");
            const inputs = form.querySelectorAll("input");
            
            const data = new FormData();

            inputs.forEach(elem => {
                data.append(elem.name, elem.value);
            })

            fetch("/registration", {
                method: "POST",
                body: data,
            })
                .then(res => res.json())
                .then(data => {
                    if(data.status && data.status === 401){
                        throw new Error(data.message);
                    }
                    if(data.error){
                        throw new Error(data.error);
                    }
                    location.href = data.url;
                })
                .catch(err => {
                    document.getElementById("error_message").innerHTML = err.message;
                });

        })
    </script>

</body>
</html>