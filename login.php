<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test Site</title>

    <link rel="stylesheet" href="/build.css" />
</head>
<body class="bg-slate-900">
    <?php
        include("components/navbar.php");
    ?>
    <main class="grid w-full h-screen px-4 place-items-center">
        <div class="grid grid-cols-2 border border-slate-50/[0.06] rounded-md overflow-hidden">
            <div class="grid w-full h-full bg-gradient-to-br from-indigo-600 to-violet-600 place-items-center">
                <h1 class="flex items-center gap-1 text-xl font-bold text-slate-950">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shield-lock-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M11.998 2l.118 .007l.059 .008l.061 .013l.111 .034a.993 .993 0 0 1 .217 .112l.104 .082l.255 .218a11 11 0 0 0 7.189 2.537l.342 -.01a1 1 0 0 1 1.005 .717a13 13 0 0 1 -9.208 16.25a1 1 0 0 1 -.502 0a13 13 0 0 1 -9.209 -16.25a1 1 0 0 1 1.005 -.717a11 11 0 0 0 7.531 -2.527l.263 -.225l.096 -.075a.993 .993 0 0 1 .217 -.112l.112 -.034a.97 .97 0 0 1 .119 -.021l.115 -.007zm.002 7a2 2 0 0 0 -1.995 1.85l-.005 .15l.005 .15a2 2 0 0 0 .995 1.581v1.769l.007 .117a1 1 0 0 0 1.993 -.117l.001 -1.768a2 2 0 0 0 -1.001 -3.732z" stroke-width="0" fill="currentColor"></path>
                    </svg>
                    Secure Login
                </h1>
            </div>
            <form action="post" class="flex flex-col p-10">
                <fieldset class="flex flex-col-reverse">
                    <input placeholder=" " id="username" name="username" type="text" class="bg-transparent border-b outline-none border-slate-50/[0.06] placeholder-shown:h-0 h-5 focus:h-5 duration-200 peer text-slate-400 focus:text-violet-400 pb-1"/>
                    <label for="username" class="text-sm duration-200 peer-focus:text-sm peer-focus:text-slate-600 text-slate-600 peer-placeholder-shown:text-violet-100 peer-placeholder-shown:text-base peer-placeholder-shown:cursor-text">Username/Email</label>
                </fieldset>
                <fieldset class="flex flex-col-reverse mt-4">
                    <input placeholder=" " id="password" name="password" type="password" class="bg-transparent border-b outline-none border-slate-50/[0.06] placeholder-shown:h-0 h-5 focus:h-5 duration-200 peer text-slate-400 focus:text-violet-400 pb-1"/>
                    <label for="password" class="text-sm duration-200 peer-focus:text-sm peer-focus:text-slate-600 text-slate-600 peer-placeholder-shown:text-violet-100 peer-placeholder-shown:text-base peer-placeholder-shown:cursor-text">Password</label>
                </fieldset>
                <button type="submit" class="p-2 mt-4 rounded bg-violet-400/10 text-violet-400 hover:bg-violet-400/20">Login</button>
                <p class="mt-4 text-slate-500">No account? <a href="/register.php" class="text-violet-500 hover:text-violet-400">Register now!</a></p>
            </form>
        </div>
    </main>
</body>
</html>