<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css">
</head>

<body>
    <?php include_once 'includes/nav.php';?>

    <!-- Products-->
    <section class="text-gray-600 body-font">
    <p class="px-5 py-2 text-lg">Products</p>
        <div class="container px-5 py-10 mx-auto">
            
            <div class="flex flex-wrap -m-4">
                <?php for($i = 1; $i < 9; $i++):?>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a href="viewproduct?id=<?=$i;?>" class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/420x260">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Product #<?=$i;?></h2>
                        <p class="mt-1">$<?=16+$i;?>.00</p>
                    </div>
                </div>
                <?php endfor;?>
            </div>
        </div>
    </section>

    <?php include_once 'includes/footer.php';?>
</body>

</html>