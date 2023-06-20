<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body class="antialiased">
        <section class="pb-4">
            <div class="bg-white border rounded-5">
                <section class="w-100 p-4 d-flex justify-content-center pb-4">
                    <form action="{{url::route('supadata.save')}}" method="POST">
                      <!-- 2 column grid layout with text inputs for the first and last names -->
                      <div class="row mb-4">
                        <div class="col">
                          <div class="form-outline">
                            <input type="text" id="form3Example1" name="title" class="form-control" />
                            <label class="form-label" for="form3Example1">Title</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-outline">
                            <input type="text" id="form3Example2" name="first_name" class="form-control" />
                            <label class="form-label" for="form3Example2">First name</label>
                          </div>
                        </div>
                      </div>

                      <!-- Submit button -->
                      <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>

                    </form>
                </section>
            </div>
        </section>
    </body>
</html>
