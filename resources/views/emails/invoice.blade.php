<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> ShoperSquare.com </title>
    
    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="3">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="http://www.shopersquare.com/invoice.png">
                            </td>
                             
                             <td align="right">
                                Invoice #: {{ time() }}<br>
                                Created date:  {{ date('d-M-Y') }}<br>
                                Due date: {{ date('d-M-Y') }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                                       
                            Plot No. 21/5, 1st Floor,<br> office No. 101 & 102,<br> Vijay Nagar, near Life Care Hospital, Indore – 452001 <br>
                            http://www.shopersquare.com
                            </td>
                             
                             <td align="right">
                               <b> BIlling address:</b><br>
                                {{
                                    $data['billing']->name }}<br>
                                {{    $data['billing']->email }}<br>
                                 {{   $data['billing']->mobile }}</br>
                                  {{   $data['billing']->address1 }}</br>
                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading" >
                <td>
                    Payment Method
                </td>
                  <td>
                      
                </td>
                
                <td align="right">
                    Order Date
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Cash On Delivery
                </td>
                  <td> 
                  
                </td> 
                <td align="right">
                     {{ date('d-M-Y')}}
                </td>
            </tr>

             <tr class="heading"  >
                <td colspan="3">
                    Shipping address
                </td>
                  
            </tr>
             <tr   >
                <td colspan="3">
                To 
                  <p style="margin-left: 15px">  {{ $data['shipping']->name }}, <br>
                    {{ $data['shipping']->address1 }},
                    {{ $data['shipping']->address2 }}, <br>
                    {{ $data['shipping']->city }},
                    {{ $data['shipping']->state }},
                    {{ $data['shipping']->zip_code }}, <br>
                    {{ $data['shipping']->email }},
                    {{ $data['shipping']->mobile }} <p>
                </td>
                 
            </tr>


            
            <tr class="heading">
                <td>
                    Item
                </td>
                <td>
                    Qty
                </td>
                
                
                <td align="right">
                    Price
                </td>
            </tr>
           @foreach($data['cart'] as $result) 
            <tr class="item">
                <td>
                   {{$result->name}}
                </td>

                <td>
                     {{$result->qty}}
                </td>
                
                 
                <td align="right">
                  INR  {{$result->price}}
                </td>
            </tr>
              @endforeach 
              
            
            <tr class="total">
                <td></td>
                 <td>  </td>
                
                <td align="right">
                 Sub Total :  INR {{Cart::subtotal()}}
                </td>
            </tr>
        </table>
    </div>
</body>
</html>