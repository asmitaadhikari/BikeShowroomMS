<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="Bill/Style.css">
<link rel="stylesheet" type="text/css" href="Bill/billjs.js">
<!------ Include the above in your HEAD tag ---------->

<!--Author      : @arboshiki-->
<div id="invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">

        <script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    function printReport()
    {
        var prtContent = document.getElementById("printableArea");
        var WinPrint = window.open();
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
</script>


            <button id="printInvoice" class="btn btn-info" onClick="printReport()"><i class="fa fa-print"></i> Print</button>
            
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto" id="printableArea">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://lobianijs.com">
                            <img src="http://lobianijs.com/lobiadmin/version/1.0/ajax/img/logo/lobiadmin-logo-text-64.png" data-holder-rendered="true" />
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="https://lobianijs.com">
                            Bike-Shop
                            </a>
                        </h2>
                        <div>455 Foggy Heights, AZ 85004, US</div>
                        <div>(977)-9843045363</div>
                        <div>MotoBike@gmail.com</div>
                    </div>
                </div>
            </header>
            <main>
        
                                    <tr>
                                   
                                    
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to">{{ Auth::user()->name }}</h2>
                       
                        <div class="email"><a href="mailto:john@example.com">{{ Auth::user()->email }}</a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE 3-2-1</h1>
                        <div class="date">Date of Invoice: {{$date}}</div>
                       
                    </div>
                </div>
                </tr>
     
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th class="text-left">Bike Name</th>
                            
                            <th class="text-right">PRICE</th>
                            <th class="text-right">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($bill->count())
	                                @foreach($bill as $key=>$bills)
                        <tr>
                        <td>{!!$key + 1 !!}</td>
                            <td class="text-left"><h3>
                                <a target="_blank" href="">
                                {!! $bills->name !!}
                                </a>
                                </h3>
                               <a target="_blank" href="">
                                   Useful videos
                               </a> 
                               to improve your Javascript skills. Subscribe and stay tuned :)
                            </td>
                            
                            <td class="qty">{!! $bills->price !!}</td>
                            <td class="total"> {!! $bills->price !!}</td>
                        </tr>
                      
                      
                    </tbody>
                    @endforeach

@else
<tr>
<td colspan="4"> No record found</td>
</tr>
@endif 
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL</td>
                            <td>$5,200.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">TAX 25%</td>
                            <td>$1,300.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GRAND TOTAL</td>
                            <td>$6,500.00</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="thanks">Thank you!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <div></div>
    </div>
</div>