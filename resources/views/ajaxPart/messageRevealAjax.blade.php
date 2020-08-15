    @foreach($messageCode as $messageLinkDetail)
    <div class="p-3 py-5 rounded shadow" style="background-color: #ffffff;">
        <div>
            <p>{!! Crypt::decryptString($messageLinkDetail->messages) !!}</p>
        </div>
    </div>

    <br>
    <a href="/" class="btn btn-primary w-100" >Respond to another Protecter Message</a> 
    @endforeach