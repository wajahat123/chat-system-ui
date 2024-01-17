@extends('layouts.app')

@section('content')


<div class="layout-wrapper "  style="max-width: 100%;">
  <!-- Start User chat -->
  <div class="" style="max-width: 3000px;
  display: flex;
  justify-content: center;">




  <div class="chat-content " style="max-width: 500px;">
      <!-- start chat conversation section -->
      <div class="w-100 overflow-hidden position-relative">
          <!-- conversation user -->
          <div id="users-chat" class="position-relative" style="display: block;">
          <div class="p-3 p-lg-4 user-chat-topbar">
              <div class="row align-items-center">
                  <div class="col-sm-4 col-8">
                      <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 d-block d-lg-none me-3">
                              <a href="javascript: void(0);" class="user-chat-remove font-size-18 p-1"><i class="bx bx-chevron-left align-middle"></i></a>
                          </div>
                          <div class="flex-grow-1 overflow-hidden">
                              <div class="d-flex align-items-center">                            
                                  <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                      <img src="{{ asset('chatbox/images/avatar-2.jpg')}}" class="rounded-circle avatar-sm" alt="">
                                      <span class="user-status"></span>
                                  </div>
                                  <div class="flex-grow-1 overflow-hidden">
                                      <h6 class="text-truncate mb-0 font-size-18"><a href="#" class="user-profile-show text-reset">Bella Cote</a></h6>
                                      <p class="text-truncate text-muted mb-0"><small>Online</small></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-8 col-4">
                      <ul class="list-inline user-chat-nav text-end mb-0">                                        
                          <li class="list-inline-item">
                              <div class="dropdown">
                                  <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <!-- <i class="bx bx-search"></i> -->
                                      <ion-icon name="search-outline"></ion-icon>
                                  </button>
                                  <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                      <div class="search-box p-2">
                                          <input type="text" class="form-control" placeholder="Search.." id="searchChatMessage">
                                      </div>
                                  </div>
                              </div>
                          </li>

                          <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                              <button type="button" class="btn nav-btn" data-bs-toggle="modal" data-bs-target=".audiocallModal">
                                  <!-- <i class="bx bxs-phone-call"></i> -->
                                  <ion-icon name="call-outline"></ion-icon>
                              </button>
                          </li>

                          <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                              <button type="button" class="btn nav-btn" data-bs-toggle="modal" data-bs-target=".videocallModal">
                                  <!-- <i class="bx bx-video"></i> -->
                                  <ion-icon name="videocam-outline"></ion-icon>
                              </button>
                          </li>

                      

                          <li class="list-inline-item">
                              <div class="dropdown">
                                  
                                  <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none user-profile-show" href="#">View Profile <i class="bx bx-user text-muted"></i></a>
                                      <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none" href="#" data-bs-toggle="modal" data-bs-target=".audiocallModal">Audio 
                                          <!-- <i class="bx bxs-phone-call text-muted"></i> -->
                                          <ion-icon name="call-outline"></ion-icon>
                                      </a>
                                      
                                  
                                  </div>
                              </div>
                          </li>                                        
                      </ul>                                    
                  </div>
              </div>
              

          </div>
          <!-- end chat user head -->

          <!-- start chat conversation -->

          <div class="chat-conversation p-3 p-lg-4 simplebar-scrollable-y" id="chat-conversation" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 24px;">
              <ul class="list-unstyled chat-conversation-list" id="users-conversation"><li class="chat-list left" id="1">                        <div class="conversation-list"><div class="chat-avatar"><img src="{{ asset('chatbox/images/avatar-2.jpg')}}" alt=""></div><div class="user-chat-content"><div class="ctext-wrap"><div class="ctext-wrap-content" id="1">        <p class="mb-0 ctext-content">Good morning 😊</p></div><div class="dropdown align-self-start message-box-drop">                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                    <i class="ri-more-2-fill"></i>                </a>                <div class="dropdown-menu">                    <a class="dropdown-item d-flex align-items-center justify-content-between reply-message" href="#" id="reply-message-0" data-bs-toggle="collapse" data-bs-target=".replyCollapse">Reply <i class="bx bx-share ms-2 text-muted"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" data-bs-toggle="modal" data-bs-target=".forwardModal">Forward <i class="bx bx-share-alt ms-2 text-muted"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between copy-message" href="#" id="copy-message-0">Copy <i class="bx bx-copy text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Mark as Unread <i class="bx bx-message-error text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between delete-item" href="#">Delete <i class="bx bx-trash text-muted ms-2"></i></a>                </div>            </div></div><div class="conversation-name"><small class="text-muted time">10:07 am</small> <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span></div></div>                </div>            </li><li class="chat-list right" id="2">                        <div class="conversation-list"><div class="user-chat-content"><div class="ctext-wrap"><div class="ctext-wrap-content" id="2">        <p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p></div><div class="dropdown align-self-start message-box-drop">                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                    <i class="ri-more-2-fill"></i>                </a>                <div class="dropdown-menu">                    <a class="dropdown-item d-flex align-items-center justify-content-between reply-message" href="#" id="reply-message-0" data-bs-toggle="collapse" data-bs-target=".replyCollapse">Reply <i class="bx bx-share ms-2 text-muted"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" data-bs-toggle="modal" data-bs-target=".forwardModal">Forward <i class="bx bx-share-alt ms-2 text-muted"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between copy-message" href="#" id="copy-message-0">Copy <i class="bx bx-copy text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Mark as Unread <i class="bx bx-message-error text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between delete-item" href="#">Delete <i class="bx bx-trash text-muted ms-2"></i></a>                </div>            </div></div><div class="conversation-name"><small class="text-muted time">10:12 am</small> <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span></div></div>                </div>            </li><li class="chat-list left" id="3">                        <div class="conversation-list"><div class="chat-avatar"><img src="{{ asset('chatbox/images/avatar-2.jpg')}}" alt=""></div><div class="user-chat-content"><div class="ctext-wrap"><div class="ctext-wrap-content" id="3">        <p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p></div><div class="dropdown align-self-start message-box-drop">                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                    <i class="ri-more-2-fill"></i>                </a>                <div class="dropdown-menu">                    <a class="dropdown-item d-flex align-items-center justify-content-between reply-message" href="#" id="reply-message-0" data-bs-toggle="collapse" data-bs-target=".replyCollapse">Reply <i class="bx bx-share ms-2 text-muted"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" data-bs-toggle="modal" data-bs-target=".forwardModal">Forward <i class="bx bx-share-alt ms-2 text-muted"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between copy-message" href="#" id="copy-message-0">Copy <i class="bx bx-copy text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Mark as Unread <i class="bx bx-message-error text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between delete-item" href="#">Delete <i class="bx bx-trash text-muted ms-2"></i></a>                </div>            </div></div><div class="ctext-wrap"><div class="ctext-wrap-content" id="4">        <p class="mb-0 ctext-content">Hey, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents 🎁.</p></div><div class="dropdown align-self-start message-box-drop">                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                    <i class="ri-more-2-fill"></i>                </a>                <div class="dropdown-menu">                    <a class="dropdown-item d-flex align-items-center justify-content-between reply-message" href="#" id="reply-message-0" data-bs-toggle="collapse" data-bs-target=".replyCollapse">Reply <i class="bx bx-share ms-2 text-muted"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" data-bs-toggle="modal" data-bs-target=".forwardModal">Forward <i class="bx bx-share-alt ms-2 text-muted"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between copy-message" href="#" id="copy-message-0">Copy <i class="bx bx-copy text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Mark as Unread <i class="bx bx-message-error text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between delete-item" href="#">Delete <i class="bx bx-trash text-muted ms-2"></i></a>                </div>            </div></div><div class="conversation-name"><small class="text-muted time">10:13 am</small> <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span></div></div>                </div>            </li><li class="chat-list right" id="5">                        <div class="conversation-list"><div class="user-chat-content"><div class="ctext-wrap"><div class="ctext-wrap-content" id="5">        <p class="mb-0 ctext-content">Wow that's great</p></div><div class="dropdown align-self-start message-box-drop">                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                    <i class="ri-more-2-fill"></i>                </a>                <div class="dropdown-menu">                    <a class="dropdown-item d-flex align-items-center justify-content-between reply-message" href="#" id="reply-message-0" data-bs-toggle="collapse" data-bs-target=".replyCollapse">Reply <i class="bx bx-share ms-2 text-muted"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" data-bs-toggle="modal" data-bs-target=".forwardModal">Forward <i class="bx bx-share-alt ms-2 text-muted"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between copy-message" href="#" id="copy-message-0">Copy <i class="bx bx-copy text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Mark as Unread <i class="bx bx-message-error text-muted ms-2"></i></a>                    <a class="dropdown-item d-flex align-items-center justify-content-between delete-item" href="#">Delete <i class="bx bx-trash text-muted ms-2"></i></a>                </div>            </div></div><div class="conversation-name"><small class="text-muted time">10:14 am</small> <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span></div></div>                </div>            </li><li class="chat-list left" id="6">                        <div class="conversation-list"><div class="chat-avatar"><img src="{{ asset('chatbox/images/avatar-2.jpg')}}" alt=""></div><div class="user-chat-content"><div class="ctext-wrap"><div class="message-img mb-0"><div class="message-img-list">            <div>              <a class="popup-img d-inline-block" href="https://themesbrand.com/doot/layouts/assets/images/small/img-1.jpg">                <img src="{{ asset('chatbox/images/img-1.jpg')}}" alt="" class="rounded border">              </a>            </div>            <div class="message-img-link">              <ul class="list-inline mb-0">                <li class="list-inline-item dropdown">                  <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                      <i class="bx bx-dots-horizontal-rounded"></i>                  </a>                <div class="dropdown-menu">                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesbrand.com/doot/layouts/assets/images/small/img-1.jpg" download="">Download <i class="bx bx-download ms-2 text-muted"></i></a>                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" data-bs-toggle="collapse" data-bs-target=".replyCollapse">Reply <i class="bx bx-share ms-2 text-muted"></i></a>                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" data-bs-toggle="modal" data-bs-target=".forwardModal">Forward <i class="bx bx-share-alt ms-2 text-muted"></i></a>                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>                  <a class="dropdown-item d-flex align-items-center justify-content-between delete-image" href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>                </div>              </li>          </ul>        </div>      </div><div class="message-img-list">            <div>              <a class="popup-img d-inline-block" href="https://themesbrand.com/doot/layouts/assets/images/small/img-2.jpg">                <img src="{{ asset('chatbox/images/img-2.jpg')}}" alt="" class="rounded border">              </a>            </div>            <div class="message-img-link">              <ul class="list-inline mb-0">                <li class="list-inline-item dropdown">                  <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                      <i class="bx bx-dots-horizontal-rounded"></i>                  </a>                <div class="dropdown-menu">                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesbrand.com/doot/layouts/assets/images/small/img-2.jpg" download="">Download <i class="bx bx-download ms-2 text-muted"></i></a>                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" data-bs-toggle="collapse" data-bs-target=".replyCollapse">Reply <i class="bx bx-share ms-2 text-muted"></i></a>                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" data-bs-toggle="modal" data-bs-target=".forwardModal">Forward <i class="bx bx-share-alt ms-2 text-muted"></i></a>                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>                  <a class="dropdown-item d-flex align-items-center justify-content-between delete-image" href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>                </div>              </li>          </ul>        </div>      </div></div></div><div class="conversation-name"><small class="text-muted time">10:15 am</small> <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span></div></div>                </div>            </li><li class="chat-list right" id="7">                        <div class="conversation-list"><div class="user-chat-content"><div class="ctext-wrap"><div class="ctext-wrap-content">            <div class="p-3 border-primary border rounded-3">            <div class="d-flex align-items-center attached-file">                <div class="flex-shrink-0 avatar-sm me-3 ms-0 attached-file-avatar">                    <div class="avatar-title bg-primary-subtle text-primary rounded-circle font-size-20">                        <i class="ri-attachment-2"></i>                    </div>                </div>                <div class="flex-grow-1 overflow-hidden">                    <div class="text-start">                        <h5 class="font-size-14 mb-1">design-phase-1-approved.pdf</h5>                        <p class="text-muted text-truncate font-size-13 mb-0">12.5 MB</p>                    </div>                </div>                <div class="flex-shrink-0 ms-4">                    <div class="d-flex gap-2 font-size-20 d-flex align-items-start">                        <div>                            <a href="#" class="text-muted">                                <i class="bx bxs-download"></i>                            </a>                        </div>                    </div>                </div>             </div>            </div>            </div>            <div class="dropdown align-self-start message-box-drop">                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                    <i class="ri-more-2-fill"></i>                </a>                <div class="dropdown-menu">                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesbrand.com/doot/layouts/assets/images/pdf/design-phase-1-approved.pdf" download="">Download <i class="bx bx-download ms-2 text-muted"></i></a>                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" data-bs-toggle="collapse" data-bs-target=".replyCollapse">Reply <i class="bx bx-share ms-2 text-muted"></i></a>                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" data-bs-toggle="modal" data-bs-target=".forwardModal">Forward <i class="bx bx-share-alt ms-2 text-muted"></i></a>                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>                  <a class="dropdown-item d-flex align-items-center justify-content-between delete-item" href="#">Delete <i class="bx bx-trash text-muted ms-2"></i></a>                </div>            </div></div><div class="conversation-name"><small class="text-muted time">10:16 am</small> <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span></div></div>                </div>            </li><li class="chat-list left" id="8">                        <div class="conversation-list"><div class="chat-avatar"><img src="{{ asset('chatbox/images/avatar-2.jpg')}}" alt=""></div><div class="user-chat-content"><div class="ctext-wrap"><div class="ctext-wrap-content" id="8">        <p class="mb-0 ctext-content">typing...</p></div></div><div class="conversation-name"><small class="text-muted time"></small> <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span></div></div>                </div>            </li></ul>    
          </div></div></div></div><div class="simplebar-placeholder" style="width: 1161px; height: 968px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 429px; display: block; transform: translate3d(0px, 216px, 0px);"></div></div></div>

          <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show " id="copyClipBoard" role="alert" style="display: none;">
              message copied
          </div>


          <!-- end chat conversation end -->
          </div>

          <!-- conversation group -->
          <div id="channel-chat" class="position-relative" style="display: none;">
          <div class="p-3 p-lg-4 user-chat-topbar">
              <div class="row align-items-center">
                  <div class="col-sm-4 col-8">
                      <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 d-block d-lg-none me-3">
                              <a href="javascript: void(0);" class="user-chat-remove font-size-18 p-1"><i class="bx bx-chevron-left align-middle"></i></a>
                          </div>
                          <div class="flex-grow-1 overflow-hidden">
                              <div class="d-flex align-items-center">                            
                                  <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3">
                                      <img src="{{ asset('chatbox/images/user-dummy-img.jpg')}}" class="rounded-circle avatar-sm" alt="">                            
                                  </div>
                                  <div class="flex-grow-1 overflow-hidden">
                                      <h6 class="text-truncate mb-0 font-size-18"><a href="#" class="user-profile-show text-reset">Design Phase 2</a></h6>
                                      <p class="text-truncate text-muted mb-0"><small>24 Members</small></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-8 col-4">
                      <ul class="list-inline user-chat-nav text-end mb-0">                                        
                          <li class="list-inline-item">
                              <div class="dropdown">
                                  <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <!-- <i class="bx bx-search"></i> -->
                                      <ion-icon name="search-outline"></ion-icon>
                                  </button>
                                  <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                      <div class="search-box p-2">
                                          <input type="text" class="form-control" placeholder="Search..">
                                      </div>
                                  </div>
                              </div>
                          </li>


                                                                  
                      </ul>                                    
                  </div>
              </div>
              <div class="alert alert-warning alert-dismissible topbar-bookmark fade show p-1 px-3 px-lg-4 pe-lg-5 pe-5" role="alert">
                  <div class="d-flex align-items-start bookmark-tabs">
                      <div class="tab-list-link">
                          <a href="#" class="tab-links" data-bs-toggle="modal" data-bs-target=".pinnedtabModal"><i class="ri-pushpin-fill align-middle me-1"></i> 10 Pinned</a>
                      </div>
                      <div>
                          <a href="#" class="tab-links border-0 px-3" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom" aria-label="Add Bookmark" data-bs-original-title="Add Bookmark"><i class="ri-add-fill align-middle"></i></a>
                      </div>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          </div>
          <!-- end chat user head -->

          <!-- start chat conversation -->

          <div class="chat-conversation p-3 p-lg-4" id="chat-conversation" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 24px;">
              <ul class="list-unstyled chat-conversation-list" id="channel-conversation">       
              </ul>
          </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
          <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show " id="copyClipBoardChannel" role="alert" style="display: none;">
              message copied
          </div>
          <!-- end chat conversation end -->
          </div>

          <!-- start chat input section -->
          <div class="position-relative">
              <div class="chat-input-section p-3 p-lg-4"> 
              
                  <form id="chatinput-form" enctype="multipart/form-data"> 
                      <div class="row g-0 align-items-center">  
                          <div class="file_Upload"></div>                                  
                          <div class="col-auto">
                              <div class="chat-input-links me-md-2">
                                  <div class="links-list-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="More" data-bs-original-title="More">
                                      <button type="button" class="btn btn-link text-decoration-none btn-lg waves-effect" data-bs-toggle="collapse" data-bs-target="#chatinputmorecollapse" aria-expanded="false" aria-controls="chatinputmorecollapse">
                                          <!-- <i class="bx bx-dots-horizontal-rounded align-middle"></i> -->
                                          <ion-icon name="reorder-three-outline"></ion-icon>
                                      </button>
                                  </div>
                                  <div class="links-list-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Emoji" data-bs-original-title="Emoji">
                                      <button type="button" class="btn btn-link text-decoration-none btn-lg waves-effect emoji-btn" id="emoji-btn">
                                          <!-- <i class="bx bx-smile align-middle"></i> -->
                                          <ion-icon name="happy-outline"></ion-icon>
                                      </button>
                                  </div>
                              </div>
                          </div>
                          <div class="col">
                              <div class="position-relative">
                                  <div class="chat-input-feedback">
                                      Please Enter a Message
                                  </div>
                                  <input autocomplete="off" type="text" class="form-control form-control-lg chat-input" autofocus="" id="chat-input" placeholder="Type your message...">
                              </div>
                          </div>
                          <div class="col-auto">
                              <div class="chat-input-links ms-2 gap-md-1">
                                  <div class="links-list-item d-none d-sm-block" data-bs-container=".chat-input-links" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-html="true" data-bs-placement="top" data-bs-content="&lt;div class='loader-line'&gt;&lt;div class='line'&gt;&lt;/div&gt;&lt;div class='line'&gt;&lt;/div&gt;&lt;div class='line'&gt;&lt;/div&gt;&lt;div class='line'&gt;&lt;/div&gt;&lt;div class='line'&gt;&lt;/div&gt;&lt;/div&gt;">
                                      <button type="button" class="btn btn-link text-decoration-none btn-lg waves-effect" onclick="audioPermission()">
                                          <!-- <i class="bx bx-microphone align-middle"></i> -->
                                          <ion-icon name="mic-outline"></ion-icon>
                                      </button>
                                  </div>
                                  <div class="links-list-item">
                                      <button type="submit" class="btn btn-primary btn-lg chat-send waves-effect waves-light" data-bs-toggle="collapse" data-bs-target=".chat-input-collapse1.show">
                                          <!-- <i class="bx bxs-send align-middle" id="submit-btn"></i> -->
                                          <ion-icon name="send-outline"  id="submit-btn"></ion-icon>
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>                            
                  <div class="chat-input-collapse chat-input-collapse1 collapse" id="chatinputmorecollapse">
                      <div class="card mb-0">
                          <div class="card-body py-3">
                              <!-- Swiper -->
                              <div class="swiper chatinput-links">
                                  <div class="swiper-wrapper">
                                      <div class="swiper-slide">
                                          <div class="text-center px-2 position-relative">
                                              <div>
                                                  <input id="attachedfile-input" type="file" class="d-none" accept=".zip,.rar,.7zip,.pdf" multiple="">
                                                  <label for="attachedfile-input" class="avatar-sm mx-auto stretched-link">
                                                      <span class="avatar-title font-size-18 bg-primary-subtle text-primary rounded-circle">
                                                          <i class="bx bx-paperclip"></i>
                                                      </span>
                                                  </label>
                                              </div>
                                              <h5 class="font-size-11 text-uppercase mt-3 mb-0 text-body text-truncate">Attached</h5>
                                          </div>
                                      </div>
                                      <div class="swiper-slide">
                                          <div class="text-center px-2">
                                              <div class="avatar-sm mx-auto">
                                                  <div class="avatar-title font-size-18 bg-primary-subtle text-primary rounded-circle">
                                                      <i class="bx bxs-camera"></i>
                                                  </div>
                                              </div>
                                              <h5 class="font-size-11 text-uppercase text-truncate mt-3 mb-0"><a href="#" class="text-body stretched-link" onclick="cameraPermission()">Camera</a></h5>
                                          </div>
                                      </div>
                                      <div class="swiper-slide">
                                          <div class="text-center px-2 position-relative">
                                              <div>
                                                  <input id="galleryfile-input" type="file" class="d-none" accept="image/png, image/gif, image/jpeg" multiple="">
                                                  <label for="galleryfile-input" class="avatar-sm mx-auto stretched-link">
                                                      <span class="avatar-title font-size-18 bg-primary-subtle text-primary rounded-circle">
                                                          <i class="bx bx-images"></i>
                                                      </span>
                                                  </label>
                                              </div>
                                              <h5 class="font-size-11 text-uppercase text-truncate mt-3 mb-0">Gallery</h5>
                                          </div>
                                      </div>
                                      <div class="swiper-slide">
                                          <div class="text-center px-2">
                                              <div>
                                                  <input id="audiofile-input" type="file" class="d-none" accept="audio/*" multiple="">
                                                  <label for="audiofile-input" class="avatar-sm mx-auto stretched-link">
                                                      <span class="avatar-title font-size-18 bg-primary-subtle text-primary rounded-circle">
                                                          <i class="bx bx-headphone"></i>
                                                      </span>
                                                  </label>
                                              </div>
                                              <h5 class="font-size-11 text-uppercase text-truncate mt-3 mb-0">Audio</h5>
                                          </div>
                                      </div>
                                      <div class="swiper-slide">
                                          <div class="text-center px-2">
                                              <div class="avatar-sm mx-auto">
                                                  <div class="avatar-title font-size-18 bg-primary-subtle text-primary rounded-circle">
                                                      <i class="bx bx-current-location"></i>
                                                  </div>
                                              </div>
                                              
                                              <h5 class="font-size-11 text-uppercase text-truncate mt-3 mb-0"><a href="#" class="text-body stretched-link" onclick="getLocation()">Location</a></h5>
                                          </div>
                                      </div>
                                      <div class="swiper-slide">
                                          <div class="text-center px-2">
                                              <div class="avatar-sm mx-auto">
                                                  <div class="avatar-title font-size-18 bg-primary-subtle text-primary rounded-circle">
                                                      <i class="bx bxs-user-circle"></i>
                                                  </div>
                                              </div>
                                              <h5 class="font-size-11 text-uppercase text-truncate mt-3 mb-0"><a href="#" class="text-body stretched-link" data-bs-toggle="modal" data-bs-target=".contactModal">Contacts</a></h5>
                                          </div>
                                      </div>

                                      <div class="swiper-slide d-block d-sm-none">
                                          <div class="text-center px-2">
                                              <div class="avatar-sm mx-auto">
                                                  <div class="avatar-title font-size-18 bg-primary-subtle text-primary rounded-circle">
                                                      <i class="bx bx-microphone"></i>
                                                  </div>
                                              </div>
                                              <h5 class="font-size-11 text-uppercase text-truncate mt-3 mb-0"><a href="#" class="text-body stretched-link">Audio</a></h5>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="replyCard">
                  <div class="card mb-0">
                      <div class="card-body py-3">
                          <div class="replymessage-block mb-0 d-flex align-items-start">
                              <div class="flex-grow-1">
                                  <h5 class="conversation-name"></h5>
                                  <p class="mb-0"></p>
                              </div>
                              <div class="flex-shrink-0">
                                  <button type="button" id="close_toggle" class="btn btn-sm btn-link mt-n2 me-n3 font-size-18">
                                      <i class="bx bx-x align-middle"></i>
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end chat input section -->
      </div>
      <!-- end chat conversation section -->
  </div>
      <!-- end user chat content -->
  <!-- End User chat -->
  <!-- audiocall Modal -->
  <div class="modal fade audiocallModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content shadow-lg border-0">
              <div class="modal-body p-0">
                  <div class="text-center p-4 pb-0">
                      <div class="avatar-xl mx-auto mb-4">
                          <img src="{{ asset('chatbox/images/avatar-2.jpg')}}" alt="" class="img-thumbnail rounded-circle">
                      </div>

                      <div class="d-flex justify-content-center align-items-center mt-4">
                          <div class="avatar-md h-auto">
                              <button type="button" class="btn btn-light avatar-sm rounded-circle">
                                  <span class="avatar-title bg-transparent text-muted font-size-20">
                                      {{-- <i class="bx bx-microphone-off"></i> --}}
                                      <ion-icon name="mic-off-outline"></ion-icon>
                                  </span>
                              </button>
                              <h5 class="font-size-11 text-uppercase text-muted mt-2">Mute</h5>
                          </div>
                          <div class="avatar-md h-auto">
                              <button type="button" class="btn btn-light avatar-sm rounded-circle">
                                  <span class="avatar-title bg-transparent text-muted font-size-20">
                                      {{-- <i class="bx bx-volume-full"></i> --}}
                                      <ion-icon name="volume-high-outline"></ion-icon>
                                  </span>
                              </button>
                              <h5 class="font-size-11 text-uppercase text-muted mt-2">Speaker</h5>
                          </div>
                       
                      </div>

                      <div class="mt-4">
                          <button type="button" class="btn btn-danger avatar-md call-close-btn rounded-circle" data-bs-dismiss="modal">
                              <span class="avatar-title bg-transparent font-size-24">
                                  {{-- <i class="mdi mdi-phone-hangup"></i> --}}
                                  <ion-icon name="call-outline"></ion-icon>
                              </span>
                          </button>
                      </div>
                  </div>

                  <div class="p-4 bg-primary-subtle mt-n4">
                      <div class="mt-4 text-center">
                          <h5 class="font-size-18 mb-0 text-truncate">Bella Cote</h5>
                      </div>
                  </div>
              </div>                        
          </div>
      </div>
  </div>
  <!-- audiocall Modal -->
  <!-- videocall Modal -->
  <div class="modal fade videocallModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content shadow-lg border-0">
              <div class="modal-body p-0">
                  <img src="{{ asset('chatbox/images/avatar-2.jpg')}}" alt="" class="videocallModal-bg">
                  <div class="position-absolute start-0 end-0 bottom-0">
                      <div class="text-center">
                          <div class="d-flex justify-content-center align-items-center text-center">
                              <div class="avatar-md h-auto">
                                  <button type="button" class="btn btn-light avatar-sm rounded-circle">
                                      <span class="avatar-title bg-transparent text-muted font-size-20">
                                          {{-- <i class="bx bx-microphone-off"></i> --}}
                                          <ion-icon name="mic-off-outline"></ion-icon>
                                      </span>
                                  </button>
                              </div>
                              <div class="avatar-md h-auto">
                                  <button type="button" class="btn btn-light avatar-sm rounded-circle">
                                      <span class="avatar-title bg-transparent text-muted font-size-20">
                                          {{-- <i class="bx bx-volume-full"></i> --}}
                                          <ion-icon name="volume-high-outline"></ion-icon>
                                      </span>
                                  </button>
                              </div>
                              <div class="avatar-md h-auto">
                                  <button type="button" class="btn btn-light avatar-sm rounded-circle">
                                      <span class="avatar-title bg-transparent text-muted font-size-20">
                                          <!-- <i class="bx bx-video-off"></i> -->
                                          <ion-icon name="videocam-outline"></ion-icon>
                                      </span>
                                  </button>
                              </div>
                              <div class="avatar-md h-auto">
                                  <button type="button" class="btn btn-light avatar-sm rounded-circle">
                                      <span class="avatar-title bg-transparent text-muted font-size-20">
                                          <i class="bx bx-refresh"></i>
                                      </span>
                                  </button>
                              </div>
                          </div>

                          <div class="mt-4">
                              <button type="button" class="btn btn-danger avatar-md call-close-btn rounded-circle" data-bs-dismiss="modal">
                                  <span class="avatar-title bg-transparent font-size-24">
                                      {{-- <i class="mdi mdi-phone-hangup"></i> --}}
                                      <ion-icon name="call-outline"></ion-icon>
                                      
                                  </span>
                              </button>
                          </div>
                      </div>

                      <div class="p-4 bg-primary mt-n4">
                          <div class="text-white mt-4 text-center">
                              <h5 class="font-size-18 text-truncate mb-0 text-white">Bella Cote</h5>
                          </div>
                      </div>
                  </div>
                  
              </div>
          </div>
      </div>
  </div>
  <!-- end modal -->
  <!-- contactModal -->
  <div class="modal fade contactModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content modal-header-colored shadow-lg border-0">
              <div class="modal-header">
                  <h5 class="modal-title text-white font-size-16">Contacts</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
              <div class="modal-body p-4">
                  
                  <div class="input-group mb-4">
                      <input type="text" class="form-control bg-light border-0 pe-0" placeholder="Search here.." id="searchContactModal" onkeyup="searchContactOnModal()" aria-label="Example text with button addon" aria-describedby="contactSearchbtn-addon">
                      <button class="btn btn-light" type="button" id="contactSearchbtn-addon">
                          <!-- <i class="bx bx-search align-middle"></i> -->
                          <ion-icon name="search-outline"></ion-icon>
                      </button>
                  </div>

                  <div class="d-flex align-items-center px-1">
                      <div class="flex-grow-1">
                          <h4 class=" font-size-11 text-muted text-uppercase">Contacts</h4>
                      </div>
                  </div>
                  <div class="contact-modal-list mx-n4 px-1" data-simplebar="init" style="max-height: 200px;"><div class="simplebar-wrapper" style="margin: 0px -4px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px 4px;">
                      <div class="mt-3">
                          <div class="contact-list-title">
                              A
                          </div>

                          <ul class="list-unstyled contact-list">
                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Albert Rodarte</h5>
                                  </div>
                              </li>

                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Allison Etter</h5>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <!-- end contact list A -->

                      <div class="mt-3">
                          <div class="contact-list-title">
                              C
                          </div>

                          <ul class="list-unstyled contact-list">
                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Craig Smiley</h5>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <!-- end contact list C -->

                      <div class="mt-3">
                          <div class="contact-list-title">
                              D
                          </div>

                          <ul class="list-unstyled contact-list">
                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Daniel Clay</h5>
                                  </div>
                              </li>

                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Doris Brown</h5>
                                  </div>
                              </li>

                          </ul>
                      </div>
                      <!-- end contact list D -->

                      <div class="mt-3">
                          <div class="contact-list-title">
                              I
                          </div>

                          <ul class="list-unstyled contact-list">
                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Iris Wells</h5>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <!-- end contact list I -->

                      <div class="mt-3">
                          <div class="contact-list-title">
                              J
                          </div>

                          <ul class="list-unstyled contact-list">
                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Juan Flakes</h5>
                                  </div>
                              </li>

                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">John Hall</h5>
                                  </div>
                              </li>

                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Joy Southern</h5>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <!-- end contact list J -->

                      <div class="mt-3">
                          <div class="contact-list-title">
                              M
                          </div>

                          <ul class="list-unstyled contact-list">
                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Mary Farmer</h5>
                                  </div>
                              </li>
                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Mark Messer</h5>
                                  </div>
                              </li>

                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Michael Hinton</h5>
                                  </div>
                              </li>

                          </ul>
                      </div>
                      <!-- end contact list M -->

                      <div class="mt-3">
                          <div class="contact-list-title">
                              O
                          </div>

                          <ul class="list-unstyled contact-list">
                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Ossie Wilson</h5>
                                  </div>
                              </li>

                          </ul>
                      </div>
                      <!-- end contact list O -->

                      <div class="mt-3">
                          <div class="contact-list-title">
                              P
                          </div>

                          <ul class="list-unstyled contact-list">
                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Phillis Griffin</h5>
                                  </div>
                              </li>
                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Paul Haynes</h5>
                                  </div>
                              </li>

                          </ul>
                      </div>
                      <!-- end contact list P -->

                      <div class="mt-3">
                          <div class="contact-list-title">
                              R
                          </div>

                          <ul class="list-unstyled contact-list">
                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Rocky Jackson</h5>
                                  </div>
                              </li>

                          </ul>
                      </div>
                      <!-- end contact list R -->

                      <div class="mt-3">
                          <div class="contact-list-title">
                              S
                          </div>

                          <ul class="list-unstyled contact-list mb-0">
                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Sara Muller</h5>
                                  </div>
                              </li>
                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Simon Velez</h5>
                                  </div>
                              </li>
                              <li>
                                  <div>
                                      <h5 class="font-size-14 m-0">Steve Walker</h5>
                                  </div>
                              </li>

                          </ul>
                      </div>
                      <!-- end contact list S -->
                  </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
              </div>       
              <div class="modal-footer">
                  <button type="button" class="btn btn-link" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary">
                  <!-- <i class="bx bxs-send align-middle"></i> -->
                  <ion-icon name="send-outline"></ion-icon>
                  </button>
              </div>                 
          </div>
      </div>
  </div>
  <!-- contactModal -->
  <!-- <video id="video" autoplay="true">


  </video>     -->


</div>

</div>


@endsection
