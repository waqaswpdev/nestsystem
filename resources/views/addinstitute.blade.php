@extends('layouts.app')

@section('content')
<div class="page-wrapper">

    <div class="card mx-3" >
        
        <form action="add" method="post">
            @csrf
            <div class="card-body">
                <h4 class="card-title">Add Institute</h4>
            </div>
            <hr>
            <div class="card-body"> 
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        @if(isset($message))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3> {{ $message }}
                        </div>
                        @endif
                        @if(isset($error))
                        <div class="alert alert-warning">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            <h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Failed</h3> {{ $error}}
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="inputname" class="control-label col-form-label">Program Name</label>
                            <select class="form-control" name="insprogram" required> 
                                <option disabled selected>Select Program</option>
                                @foreach ($programs as $pro)
                                <option value={{$pro->programID }}>{{ $pro->programName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="inputlname" class="control-label col-form-label">Program Name 2</label>
                            <input type="text" class="form-control" id="inputlname" placeholder="Last Name Here">
                        </div>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                      
                        <div class="form-group">
                            <label for="inputEmail3" class="control-label col-form-label">Institute Name</label>
                            <input type="text" class="form-control" id="instname" name="insname" placeholder="Institute Name" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6" >
                        <div class="form-group">
                            <label for="inputcontact" class="control-label col-form-label">Institute Province</label>
                            <select class="form-control" name="insprovince" required> 
                                <option value="Islamabad Capital Territory">Islamabad Capital Territory</option>
                                <option value="Punjab">Punjab</option><option value="Balochistan">Balochistan</option>
                                <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                                <option value="Sindh">Sindh</option>
                                <option value="Azad Jammu and Kashmir">Azad Jammu and Kashmir</option>
                                <option value="Gilgit-Baltistan">Gilgit-Baltistan</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="inputcontact" class="control-label col-form-label">Institute City</label>
                            <select class="form-control" name="inscity" required>  
                                    <option value="" disabled="" selected="">Select The City</option>
                                    <option value="Islamabad">Islamabad</option>
                                    
                                    <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                                    <option value="Ahmadpur East">Ahmadpur East</option>
                                    <option value="Ali Khan Abad">Ali Khan Abad</option>
                                    <option value="Alipur">Alipur</option>
                                    <option value="Arifwala">Arifwala</option>
                                    <option value="Attock">Attock</option>
                                    <option value="Bhera">Bhera</option>
                                    <option value="Bhalwal">Bhalwal</option>
                                    <option value="Bahawalnagar">Bahawalnagar</option>
                                    <option value="Bahawalpur">Bahawalpur</option>
                                    <option value="Bhakkar">Bhakkar</option>
                                    <option value="Burewala">Burewala</option>
                                    <option value="Chillianwala">Chillianwala</option>
                                    <option value="Chakwal">Chakwal</option>
                                    <option value="Chichawatni">Chichawatni</option>
                                    <option value="Chiniot">Chiniot</option>
                                    <option value="Chishtian">Chishtian</option>
                                    <option value="Daska">Daska</option>
                                    <option value="Darya Khan">Darya Khan</option>
                                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                    <option value="Dhaular">Dhaular</option>
                                    <option value="Dina">Dina</option>
                                    <option value="Dinga">Dinga</option>
                                    <option value="Dipalpur">Dipalpur</option>
                                    <option value="Faisalabad">Faisalabad</option>
                                    <option value="Ferozewala">Ferozewala</option>
                                    <option value="Fateh Jhang">Fateh Jang</option>
                                    <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                    <option value="Gojra">Gojra</option>
                                    <option value="Gujranwala">Gujranwala</option>
                                    <option value="Gujrat">Gujrat</option>
                                    <option value="Gujar Khan">Gujar Khan</option>
                                    <option value="Hafizabad">Hafizabad</option>
                                    <option value="Haroonabad">Haroonabad</option>
                                    <option value="Hasilpur">Hasilpur</option>
                                    <option value="Haveli Lakha">Haveli Lakha</option>
                                    <option value="Jatoi">Jatoi</option>
                                    <option value="Jalalpur">Jalalpur</option>
                                    <option value="Jattan">Jattan</option>
                                    <option value="Jampur">Jampur</option>
                                    <option value="Jaranwala">Jaranwala</option>
                                    <option value="Jhang">Jhang</option>
                                    <option value="Jhelum">Jhelum</option>
                                    <option value="Kalabagh">Kalabagh</option>
                                    <option value="Karor Lal Esan">Karor Lal Esan</option>
                                    <option value="Kasur">Kasur</option>
                                    <option value="Kamalia">Kamalia</option>
                                    <option value="Kamoke">Kamoke</option>
                                    <option value="Khanewal">Khanewal</option>
                                    <option value="Khanpur">Khanpur</option>
                                    <option value="Kharian">Kharian</option>
                                    <option value="Khushab">Khushab</option>
                                    <option value="Kot Addu">Kot Addu</option>
                                    <option value="Jauharabad">Jauharabad</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Lalamusa">Lalamusa</option>
                                    <option value="Layyah">Layyah</option>
                                    <option value="Liaquat Pur">Liaquat Pur</option>
                                    <option value="Lodhran">Lodhran</option>
                                    <option value="Malakwal">Malakwal</option>
                                    <option value="Mamoori">Mamoori</option>
                                    <option value="Mailsi">Mailsi</option>
                                    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                    <option value="Mian Channu">Mian Channu</option>
                                    <option value="Mianwali">Mianwali</option>
                                    <option value="Multan">Multan</option>
                                    <option value="Murree">Murree</option>
                                    <option value="Muridke">Muridke</option>
                                    <option value="Mianwali Bangla">Mianwali Bangla</option>
                                    <option value="Muzaffargarh">Muzaffargarh</option>
                                    <option value="Narowal">Narowal</option>
                                    <option value="Nankana Sahib">Nankana Sahib</option>
                                    <option value="Okara">Okara</option>
                                    <option value="Renala Khurd">Renala Khurd</option>
                                    <option value="Pakpattan">Pakpattan</option>
                                    <option value="Pattoki">Pattoki</option>
                                    <option value="Pir Mahal">Pir Mahal</option>
                                    <option value="Qaimpur">Qaimpur</option>
                                    <option value="Qila Didar Singh">Qila Didar Singh</option>
                                    <option value="Rabwah">Rabwah</option>
                                    <option value="Raiwind">Raiwind</option>
                                    <option value="Rajanpur">Rajanpur</option>
                                    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                    <option value="Rawalpindi">Rawalpindi</option>
                                    <option value="Sadiqabad">Sadiqabad</option>
                                    <option value="Safdarabad">Safdarabad</option>
                                    <option value="Sahiwal">Sahiwal</option>
                                    <option value="Sangla Hill">Sangla Hill</option>
                                    <option value="Sarai Alamgir">Sarai Alamgir</option>
                                    <option value="Sargodha">Sargodha</option>
                                    <option value="Shakargarh">Shakargarh</option>
                                    <option value="Sheikhupura">Sheikhupura</option>
                                    <option value="Sialkot">Sialkot</option>
                                    <option value="Sohawa">Sohawa</option>
                                    <option value="Soianwala">Soianwala</option>
                                    <option value="Siranwali">Siranwali</option>
                                    <option value="Talagang">Talagang</option>
                                    <option value="Taxila">Taxila</option>
                                    <option value="Toba Tek Singh">Toba Tek Singh</option>
                                    <option value="Vehari">Vehari</option>
                                    <option value="Wah Cantonment">Wah Cantonment</option>
                                    <option value="Wazirabad">Wazirabad</option>
                                    <option value="" disabled="">Sindh Cities</option>
                                    <option value="Badin">Badin</option>
                                    <option value="Bhirkan">Bhirkan</option>
                                    <option value="Rajo Khanani">Rajo Khanani</option>
                                    <option value="Chak">Chak</option>
                                    <option value="Dadu">Dadu</option>
                                    <option value="Digri">Digri</option>
                                    <option value="Diplo">Diplo</option>
                                    <option value="Dokri">Dokri</option>
                                    <option value="Ghotki">Ghotki</option>
                                    <option value="Haala">Haala</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Islamkot">Islamkot</option>
                                    <option value="Jacobabad">Jacobabad</option>
                                    <option value="Jamshoro">Jamshoro</option>
                                    <option value="Jungshahi">Jungshahi</option>
                                    <option value="Kandhkot">Kandhkot</option>
                                    <option value="Kandiaro">Kandiaro</option>
                                    <option value="Karachi">Karachi</option>
                                    <option value="Kashmore">Kashmore</option>
                                    <option value="Keti Bandar">Keti Bandar</option>
                                    <option value="Khairpur">Khairpur</option>
                                    <option value="Kotri">Kotri</option>
                                    <option value="Larkana">Larkana</option>
                                    <option value="Matiari">Matiari</option>
                                    <option value="Mehar">Mehar</option>
                                    <option value="Mirpur">Mirpur</option>
                                    <option value="Mirpur Khas">Mirpur Khas</option>
                                    <option value="Mithani">Mithani</option>
                                    <option value="Mithi">Mithi</option>
                                    <option value="Mehrabpur">Mehrabpur</option>
                                    <option value="Moro">Moro</option>
                                    <option value="Nagarparkar">Nagarparkar</option>
                                    <option value="Naudero">Naudero</option>
                                    <option value="Naushahro Feroze">Naushahro Feroze</option>
                                    <option value="Naushara">Naushara</option>
                                    <option value="Nawabshah">Nawabshah</option>
                                    <option value="Nazimabad">Nazimabad</option>
                                    <option value="Qambar">Qambar</option>
                                    <option value="Qasimabad">Qasimabad</option>
                                    <option value="Ranipur">Ranipur</option>
                                    <option value="Ratodero">Ratodero</option>
                                    <option value="Rohri">Rohri</option>
                                    <option value="Sakrand">Sakrand</option>
                                    <option value="Sanghar">Sanghar</option>
                                    <option value="Shahbandar">Shahbandar</option>
                                    <option value="Shahdadkot">Shahdadkot</option>
                                    <option value="Shahdadpur">Shahdadpur</option>
                                    <option value="Shahpur Chakar">Shahpur Chakar</option>
                                    <option value="Shikarpaur">Shikarpaur</option>
                                    <option value="Sukkur">Sukkur</option>
                                    <option value="Tangwani">Tangwani</option>
                                    <option value="Tando Adam Khan">Tando Adam Khan</option>
                                    <option value="Tando Allahyar">Tando Allahyar</option>
                                    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                    <option value="Thatta">Thatta</option>
                                    <option value="Umerkot">Umerkot</option>
                                    <option value="Warah">Warah</option>
                                    <option value="" disabled="">Khyber Cities</option>
                                    <option value="Abbottabad">Abbottabad</option>
                                    <option value="Adezai">Adezai</option>
                                    <option value="Alpuri">Alpuri</option>
                                    <option value="Akora Khattak">Akora Khattak</option>
                                    <option value="Ayubia">Ayubia</option>
                                    <option value="Banda Daud Shah">Banda Daud Shah</option>
                                    <option value="Bannu">Bannu</option>
                                    <option value="Batkhela">Batkhela</option>
                                    <option value="Battagram">Battagram</option>
                                    <option value="Birote">Birote</option>
                                    <option value="Chakdara">Chakdara</option>
                                    <option value="Charsadda">Charsadda</option>
                                    <option value="Chitral">Chitral</option>
                                    <option value="Daggar">Daggar</option>
                                    <option value="Dargai">Dargai</option>
                                    <option value="Darya Khan">Darya Khan</option>
                                    <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                    <option value="Doaba">Doaba</option>
                                    <option value="Dir">Dir</option>
                                    <option value="Drosh">Drosh</option>
                                    <option value="Hangu">Hangu</option>
                                    <option value="Haripur">Haripur</option>
                                    <option value="Karak">Karak</option>
                                    <option value="Kohat">Kohat</option>
                                    <option value="Kulachi">Kulachi</option>
                                    <option value="Lakki Marwat">Lakki Marwat</option>
                                    <option value="Latamber">Latamber</option>
                                    <option value="Madyan">Madyan</option>
                                    <option value="Mansehra">Mansehra</option>
                                    <option value="Mardan">Mardan</option>
                                    <option value="Mastuj">Mastuj</option>
                                    <option value="Mingora">Mingora</option>
                                    <option value="Nowshera">Nowshera</option>
                                    <option value="Paharpur">Paharpur</option>
                                    <option value="Pabbi">Pabbi</option>
                                    <option value="Peshawar">Peshawar</option>
                                    <option value="Saidu Sharif">Saidu Sharif</option>
                                    <option value="Shorkot">Shorkot</option>
                                    <option value="Shewa Adda">Shewa Adda</option>
                                    <option value="Swabi">Swabi</option>
                                    <option value="Swat">Swat</option>
                                    <option value="Tangi">Tangi</option>
                                    <option value="Tank">Tank</option>
                                    <option value="Thall">Thall</option>
                                    <option value="Timergara">Timergara</option>
                                    <option value="Tordher">Tordher</option>
                                    <option value="" disabled="">Balochistan Cities</option>
                                    <option value="Awaran">Awaran</option>
                                    <option value="Barkhan">Barkhan</option>
                                    <option value="Chagai">Chagai</option>
                                    <option value="Dera Bugti">Dera Bugti</option>
                                    <option value="Gwadar">Gwadar</option>
                                    <option value="Harnai">Harnai</option>
                                    <option value="Jafarabad">Jafarabad</option>
                                    <option value="Jhal Magsi">Jhal Magsi</option>
                                    <option value="Kacchi">Kacchi</option>
                                    <option value="Kalat">Kalat</option>
                                    <option value="Kech">Kech</option>
                                    <option value="Kharan">Kharan</option>
                                    <option value="Khuzdar">Khuzdar</option>
                                    <option value="Killa Abdullah">Killa Abdullah</option>
                                    <option value="Killa Saifullah">Killa Saifullah</option>
                                    <option value="Kohlu">Kohlu</option>
                                    <option value="Lasbela">Lasbela</option>
                                    <option value="Lehri">Lehri</option>
                                    <option value="Loralai">Loralai</option>
                                    <option value="Mastung">Mastung</option>
                                    <option value="Musakhel">Musakhel</option>
                                    <option value="Nasirabad">Nasirabad</option>
                                    <option value="Nushki">Nushki</option>
                                    <option value="Panjgur">Panjgur</option>
                                    <option value="Pishin Valley">Pishin Valley</option>
                                    <option value="Quetta">Quetta</option>
                                    <option value="Sherani">Sherani</option>
                                    <option value="Sibi">Sibi</option>
                                    <option value="Sohbatpur">Sohbatpur</option>
                                    <option value="Washuk">Washuk</option>
                                    <option value="Zhob">Zhob</option>
                                    <option value="Ziarat">Ziarat</option>
                                    
                            <option value="Abbaspur">Abbaspur</option>
                            <option value="Athmuqām">Athmuqām</option>
                            <option value="Bāgh">Bāgh</option>
                            <option value="Bhimbar(Bhimber)">Bhimbar(Bhimber)</option>
                            <option value="Chakswari">Chakswari</option>
                            <option value="Charhoi">Charhoi</option>
                            <option value="Chikkar">Chikkar</option>
                            <option value="Dadyal">Dadyal</option>
                            <option value="Dhirkot">Dhirkot</option>
                            <option value="Fārward Kahūta">Fārward Kahūta</option>
                            <option value="Fatehpur Thakiala">Fatehpur Thakiala</option>
                            <option value="Garhi Dupatta">Garhi Dupatta</option>
                            <option value="Hajira (Cheara)">Hajira (Cheara)</option>
                            <option value="Hattiān Bāla">Hattiān Bāla</option>
                            <option value="Islamgarh">Islamgarh</option>
                            <option value="Khai Gala">Khai Gala</option>
                            <option value="Khuiratta">Khuiratta</option>
                            <option value="Kotli">Kotli</option>
                            <option value="Mīrpur(New Mīrpur)">Mīrpur(New Mīrpur)</option>
                            <option value="Muzaffarābād">Muzaffarābād</option>
                            <option value="Palandri (Pallandri)">Palandri (Pallandri)</option>
                            <option value="Patikka (Patehka)">Patikka (Patehka)</option>
                            <option value="Rāwala Kot">Rāwala Kot</option>
                            <option value="Samahni">Samahni</option>
                            <option value="Sehnsa">Sehnsa</option>
                                           
                            </select> 
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="inputcontact" class="control-label col-form-label">Institute Address</label>
                            <input type="text" class="form-control" name="insaddress" placeholder="institute address">
                        </div>
                    </div>
                    <div class="action-form mx-4">
                        <div class="form-group m-b-0 text-left">
                            <button type="submit" class="btn btn-info waves-effect waves-light px-3">Save</button> 
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>


</div>

@endsection