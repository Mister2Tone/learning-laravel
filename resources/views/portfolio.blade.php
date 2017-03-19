@extends('template')

@section('title','Portfolio')

@section('content')
	<section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/acm-volunteer.jpg" class="img-responsive img-rounded" alt="acm-volunteer">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                         <img src="img/portfolio/myself-on-glasses2.jpg" class="img-responsive img-rounded" alt="myself-on-glasses">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/on-the-beach-with-music.jpg" class="img-responsive img-rounded" alt="on-the-beach-with-music">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/amature-guitarist.jpg" class="img-responsive img-rounded" alt="amature-guitarist">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/with-to-fly.jpg" class="img-responsive img-rounded" alt="with-to-fly">
                    </a>
                </div>
        </div>
    </section>
	
	<!-- Portfolio Modal -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>ACM Volunteer</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/acm-volunteer.jpg" class="img-responsive img-centered" alt="">
                            <p>I'm volunteer in this event. it's a good experience for me.</p>
                            <ul class="list-inline item-details">
                                <li>Event:
                                    <strong>ACM Volunteer
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong>April 2014
                                    </strong>
                                </li>
                                <li>Place:
                                    <strong>Sapaan Hin
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>NSC 2017</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/myself-on-glasses2.jpg" class="img-responsive img-centered" alt="">
                            <p>My friend sneak to take a photo me when i facebook in this event</p>
                            <ul class="list-inline item-details">
                                <li>Event:
                                    <strong>NSC 2017
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong>18 March 2017
                                    </strong>
                                </li>
                                <li>Place:
                                    <strong>Fashion Island, Bankok
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Music and the Beach</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/on-the-beach-with-music.jpg" class="img-responsive img-centered" alt="">
                            <p>I travelled with my friend to the beach after examination when i'm 2 year student to relax</p>
                            <ul class="list-inline item-details">
                                <li>Event:
                                    <strong>Music and the Beach
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong>29 March 2014
                                    </strong>
                                </li>
                                <li>Place:
                                    <strong>Nai Haan Beach
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Love on the Rock, Byenoir 2016</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/amature-guitarist.jpg" class="img-responsive img-centered" alt="">
                            <p>My friend and I sat to waiting someone who i forgot in this time, hahaha</p>
                            <ul class="list-inline item-details">
                                <li>Event:
                                    <strong>Love on the Rock, Byenoir 2016
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong>3 May 2015
                                    </strong>
                                </li>
                                <li>Place:
                                    <strong>Some hotel in Phuket
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Western Seminar 2014</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/with-to-fly.jpg" class="img-responsive img-centered" alt="">
                            <p>I travelled to western university to learn about managing event</p>
                            <ul class="list-inline item-details">
                                <li>Event:
                                    <strong>Western Seminar 2014
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong>4 April 2014
                                    </strong>
                                </li>
                                <li>Place:
                                    <strong>Sam Parn (3000) Bhoung
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection