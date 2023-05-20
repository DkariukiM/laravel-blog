@extends('dashboard-layout')

@section('main-page')
 <!-- Container-fluid starts-->
 <div class="container-fluid dashboard-default-sec">
            <div class="row">

                <!--  table -->
                  <div class="col-xl-12 recent-order-sec">
                    <div class="card">
                      <div class="card-body">
                        <div class="table-responsive">
                          <h5>Recent Orders</h5>
                          <table class="table table-bordernone">                                         
                            <thead>
                              <tr>                                        
                                <th>Author Name</th>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Value</th>
                                <th>Rate</th>
                                <th>
                                  <div class="setting-list">
                                    <a href="{{ route('blog.create') }}">
                                        <button class="btn btn-light"> Create Post </button>
                                    </a>

                                    
                                  </div>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-1.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="product-page.html"><span>Yellow New Nike shoes</span></a></div>
                                  </div>
                                </td>
                                <td>
                                  <p>16 August</p>
                                </td>
                                <td>
                                  <p>54146</p>
                                </td>
                                <td><img class="img-fluid" src="../assets/images/dashboard/graph-1.png" alt="" data-original-title="" title=""></td>
                                <td>
                                  <p>$210326</p>
                                </td>
                                <td>
                                  <p>Done</p>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-2.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="product-page.html"><span>Sony Brand New Headphone</span></a></div>
                                  </div>
                                </td>
                                <td>
                                  <p>2 October</p>
                                </td>
                                <td>
                                  <p>32015</p>
                                </td>
                                <td><img class="img-fluid" src="../assets/images/dashboard/graph-2.png" alt="" data-original-title="" title=""></td>
                                <td>
                                  <p>$548526</p>
                                </td>
                                <td>
                                  <p>Done</p>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-3.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="product-page.html"><span>Beautiful Golden Tree plant</span></a></div>
                                  </div>
                                </td>
                                <td>
                                  <p>21 March</p>
                                </td>
                                <td>
                                  <p>12548</p>
                                </td>
                                <td><img class="img-fluid" src="../assets/images/dashboard/graph-3.png" alt="" data-original-title="" title=""></td>
                                <td>
                                  <p>$589565</p>
                                </td>
                                <td>
                                  <p>Done</p>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-4.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="product-page.html"><span>Marco M Kely Handbeg</span></a></div>
                                  </div>
                                </td>
                                <td>
                                  <p>31 December</p>
                                </td>
                                <td>
                                  <p>15495</p>
                                </td>
                                <td><img class="img-fluid" src="../assets/images/dashboard/graph-4.png" alt="" data-original-title="" title=""></td>
                                <td>
                                  <p>$125424 </p>
                                </td>
                                <td>
                                  <p>Done</p>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-5.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="product-page.html"><span>Being Human Branded T-Shirt                                                    </span></a></div>
                                  </div>
                                </td>
                                <td>
                                  <p>26 January</p>
                                </td>
                                <td>
                                  <p>56625</p>
                                </td>
                                <td><img class="img-fluid" src="../assets/images/dashboard/graph-5.png" alt="" data-original-title="" title=""></td>
                                <td>
                                  <p>$112103</p>
                                </td>
                                <td>
                                  <p>Done</p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#recent-order" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                          <pre><code class="language-html" id="recent-order">&lt;div class="card"&gt;
 &lt;div class="card-body"&gt;
   &lt;div class="table-responsive"&gt;
     &lt;table class="table table-bordernone"&gt;
       &lt;thead&gt;
         &lt;tr&gt;
           &lt;th&gt;Name&lt;/th&gt;
           &lt;th&gt;Date&lt;/th&gt;
           &lt;th&gt;Quantity&lt;/th&gt;
           &lt;th&gt;Value&lt;/th&gt;
           &lt;th&gt;Rate&lt;/th&gt;
           &lt;th&gt;
             &lt;div class="setting-list"&gt;
               &lt;ul class="list-unstyled setting-option"&gt;
                 &lt;li&gt;
                   &lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt; &lt;/i&gt;&lt;/div&gt;
                 &lt;/li&gt;
                 &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
                 &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
                 &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
                 &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
                 &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
               &lt;/ul&gt;
             &lt;/div&gt;
           &lt;/th&gt;
         &lt;/tr&gt;
       &lt;/thead&gt;
       &lt;tbody&gt;
         &lt;tr&gt;
           &lt;td&gt;
             &lt;div class="media"&gt;
               &lt;img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-1.png" alt="" data-original-title="" title=""&gt;
               &lt;div class="media-body"&gt;
                 &lt;span&gt;Yellow New Nike shoes&lt;/span&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;16 August&lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;54146&lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;img class="img-fluid" src="../assets/images/dashboard/graph-1.png" alt="" data-original-title="" title=""&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;$210326&lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;Done&lt;/p&gt;
           &lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
           &lt;td&gt;
             &lt;div class="media"&gt;
               &lt;img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-2.png" alt="" data-original-title="" title=""&gt;
               &lt;div class="media-body"&gt;
                 &lt;span&gt;Sony Brand New Headphone&lt;/span&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;2 October&lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;32015&lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;img class="img-fluid" src="../assets/images/dashboard/graph-2.png" alt="" data-original-title="" title=""&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;$548526&lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;Done&lt;/p&gt;
           &lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
           &lt;td&gt;
             &lt;div class="media"&gt;
               &lt;img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-3.png" alt="" data-original-title="" title=""&gt;
               &lt;div class="media-body"&gt;
                 &lt;span&gt;Beautiful Golden Tree plant&lt;/span&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;21 March&lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;12548&lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;img class="img-fluid" src="../assets/images/dashboard/graph-3.png" alt="" data-original-title="" title=""&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;$589565&lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;Done&lt;/p&gt;
           &lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
           &lt;td&gt;
             &lt;div class="media"&gt;
               &lt;img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-4.png" alt="" data-original-title="" title=""&gt;
               &lt;div class="media-body"&gt;
                 &lt;span&gt;Marco M Kely Handbeg&lt;/span&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;31 December&lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;15495&lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;img class="img-fluid" src="../assets/images/dashboard/graph-4.png" alt="" data-original-title="" title=""&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;$125424 &lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;Done&lt;/p&gt;
           &lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
           &lt;td&gt;
             &lt;div class="media"&gt;
               &lt;img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-5.png" alt="" data-original-title="" title=""&gt;
               &lt;div class="media-body"&gt;
                 &lt;span&gt;Being Human Branded T-Shirt&lt;/span&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;26 January&lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;56625&lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;img class="img-fluid" src="../assets/images/dashboard/graph-5.png" alt="" data-original-title="" title=""&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;$112103&lt;/p&gt;
           &lt;/td&gt;
           &lt;td&gt;
             &lt;p&gt;Done&lt;/p&gt;
           &lt;/td&gt;
         &lt;/tr&gt;
       &lt;/tbody&gt;
     &lt;/table&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

</div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
@endsection('main-page')