@extends("master")
@section("title",trans("site.contact"))
@section("content")


    <!-- Page info -->
    <header class="site-title color">
        <div class="wrap">
            <div class="container">
                <h1>{{trans("site.contact")}}</h1>
                <nav role="navigation" class="breadcrumbs">
                    <ul>
                        <li><a href="/">{{trans("site.homepage")}}</a></li>
                        <li>{{trans("site.contact")}}</li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>



    <div class="wrap">
        @if(session("type"))
            <div class="row">
            <div class="alert alert-{{session("type")}}">{{session("message")}}</div>
            </div>
        @endif

        <div class="row">


            <!--- Content -->
            <div class="three-fourth">
                <div class="textongrey content">
                    <h2>{{trans("site.Send_us_message")}}</h2>
                    <p>{{trans("site.Send_us_message_down")}}</p>
                </div>
                <!-- Form -->


                <form method="post" action="{{route("contact.post")}}" name="form-contact" id="form-contact"
                      novalidate="novalidate">
                    {{csrf_field()}}
                    <div class="f-row">
                        <div class="one-half">
                            <label for="contact_name">{{trans("site.namesurname")}}</label>
                            <input type="text" id="contact_name" name="name">
                        </div>
                        <div class="one-half">
                            <label for="contact_email">Email</label>
                            <input type="email" id="contact_email" name="email">
                        </div>
                    </div>
                    <div class="f-row">
                        <div class="full-width">
                            <label for="contact_message">{{trans("site.message")}}</label>
                            <textarea id="contact_message" name="msg"></textarea>
                        </div>
                    </div>


                    <div class="f-row">
                        <input type="submit" value="Submit" id="submit-contact" name="submit-contact" class="btn color medium right">
                    </div>
                </form>
            </div>
            <!-- //Form -->
            <!--- // Content -->
            <aside id="right-sidebar" class="right-sidebar one-fourth sidebar right widget-area" role="complementary">
                <ul>
                    <li class="widget widget-sidebar transfers_contact_widget">
                        <article class="transfers_contact_widget one-fourth">
                            <h4>{{trans("site.needhelp")}}</h4>
                            <p>{{trans("site.outcontact")}}</p>
                            <p class="contact-data">
                                <span class="icon icon-themeenergy_call"></span> {{App\Contact::first()->phone}} </p>
                        </article>
                    </li>

                </ul>
            </aside><!-- #secondary -->


        </div>
    </div>


@endsection