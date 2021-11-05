@extends('_layouts.main')

@section('body')
    <div class="p-8 text-center font-serif">
        <img src="assets/images/logo.png" alt="logo" class="mx-auto w-1/3">
        <h3 class="mb-3">IS COMING SOON</h3>
        <h5 class="mb-3">
            Hamarosan elkészül a weboldalunk...
        </h5>
        <h5 class="mb-3">
            Addig is kövess facebookon vagy instagramon!
        </h5>
        <h5 class="mb-3">
            Ha kapcsolatba szeretnél lépni velünk írj a <br>
            <a class="my-3 text-green-900 font-bold" href="permakulturakert@gmail.com">
                permakulturakert@gmail.com
            </a> <br>
            címre vagy a közösségi média felületeinken.
        </h5>

        <h5 class="mb-3">
            Ha szeretnél értesülni róla, hogy elkészült a weboldal itt tudsz feliratkozni:
            <a href="" class="text-green-900 font-bold">
                Feliratkozás!
            </a>
        </h5>
        <h5 class="mb-5">
            Köszönjük, ha megosztod!
        </h5>
        <div class="links text-green-900 block items-center justify-center mx-auto flex xmd:block">
            <a class="facebook-link block uppercase rounded border-2 border-green-900 p-2 mx-1 mb-0 xsm:mb-2 " href="https://www.facebook.com/%C3%96kokert-permakult%C3%BAra-109929944787940">
                <i
                   class="p-2 w-12 fab fa-facebook-f fill-current text-green-900">

                </i>
                Kövess Facebook
            </a>
            <a class="instagram-link block uppercase rounded border-2 border-green-900 p-2 mx-1" href="https://www.instagram.com/okokert_permakultura/">
                <i
                   class="p-2 w-12 fab fa-instagram fill-current text-green-900">

                </i>
                Kövess Instagramon
            </a>
        </div>
    </div>
@endsection
