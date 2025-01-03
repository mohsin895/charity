 <footer class="" style="text-align: left; margin-top: {{ $marginTop }}; display:flex; justify-content:end;"
     id="testimonial-footer">
     <div>
         <span class="fw700" style="display: block; text-align:center">Sincerely</span> <br>

         {!! printSignature() !!}

         <div style="text-align:left;margin-top:10px; text-align:center">
             <span class="fw700">Dr. Fr. Thadeus Hembrom, CSC </span>
             <br>
             <span class="fw700">Principal</span>
             <br>
             <span class="fw700">{{ get_option('school_name') }}</span> <br>
             {{-- <span class="fw700">Mobile No: <a href="tel:+8801715759667">+8801715759667</a></span> <br>
             <span class="fw700">Email: <a href="mailto:frthadeuscsc@gmail.com">frthadeuscsc@gmail.com</a></span> --}}
         </div>
     </div>
 </footer>
