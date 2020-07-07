<!--Page contact avec le framework @Ulkit et @Boostrap -->


<h1 class="uk-heading-line uk-text-center"><span>Posez-nous votre question ! </span></h1>
<div style='width: 100%'class="row">
   <div class="col-xl-8 offset-xl-2 py-5">
      <form id="contact-form" method="post" action="index.php?uc=affichage&action=contactemail" role="form">
         <div class="messages"></div>
         <div class="controls">
                  <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                     <label class='formulaire' for="form_need">Civilité :<span class='red'>*</span></label>
                     <select id="form_need" name="civilite" class="form-control" required="required" data-error="Veuillez entrer votre civilité.">
                       
                        <option value="Request quotation">Mr</option>
                        <option value="Request order status">Mme</option>
                        <option value="Other">Other</option>
                     </select>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class='formulaire' for="form_need">Votre situation :<span class='red'>*</span></label>
                     <select id="form_need" name="situation" class="form-control" required="required" data-error="Veuillez entrer votre situation.">
                        <option value=""></option>
                        <option value="Request quotation">Request quotation</option>
                        <option value="Request order status">Request order status</option>
                        <option value="Request copy of an invoice">Request copy of an invoice</option>
                        <option value="Other">Other</option>
                     </select>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label class='formulaire' for="form_name">Nom :<span class='red'>*</span></label>
                     <input id="form_name" type="text" name="nom" class="form-control" placeholder="Entrez votre nom*" required="required" data-error="Le nom est obligatoire.">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class='formulaire' for="form_lastname">Prénom :<span class='red'>*</span></label>
                     <input id="form_lastname" type="text" name="prenom" class="form-control" placeholder="Entrez votre prénom*" required="required" data-error="Le prénom est obligatoire.">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label class='formulaire'for="form_email">Adresse :<span class='red'>*</span></label>
                     <input id="form_email" type="text" name="adresse" class="form-control" placeholder="Entrez votre adresse*" required="required" data-error="L'adresse est obligatoire.">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
                <div class="col-md-6">
                  <div class="form-group">
                     <label class='formulaire'for="form_email">Code postal :<span class='red'>*</span></label>
                     <input id="form_email" type="text" name="cp" class="form-control" placeholder="Entrez votre code postal *" required="required" data-error="Le code postal est obligatoire.">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
            
            </div>
                 <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label class='formulaire'for="form_email">Ville :<span class='red'>*</span></label>
                     <input id="form_email" type="text" name="ville" class="form-control" placeholder="Entrez votre ville *" required="required" data-error="La ville est obligatoire
                            .">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
                <div class="col-md-6">
                  <div class="form-group">
                     <label class='formulaire'for="form_email">Complément d'adresse :<span class='red'>*</span></label>
                     <input id="form_email" type="text" name="complement" class="form-control" placeholder="Entrez votre complément d'adresse*">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
            
            </div>
                 <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label class='formulaire'for="form_email">Téléphone :<span class='red'>*</span></label>
                     <input id="form_email" type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" name="tel" class="form-control" placeholder="Entrez votre numéro de téléphone*" required="required" data-error="Le téléphone est obligatoire.">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
                <div class="col-md-6">
                  <div class="form-group">
                     <label class='formulaire'for="form_email">E-mail :<span class='red'>*</span></label>
                     <input id="form_email" type="email" name="email" class="form-control" placeholder="Entrez votre e-mail *" required="required" data-error="L'e-mail est obligatoire.">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
            
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <label class='formulaire' for="form_message">Message <span class='red'>*</span></label>
                     <textarea id="form_message" name="message" class="form-control" placeholder="Entrez votre message*" rows="4" required="required" data-error="Le message est obligatoire."></textarea>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-md-12">
                  <input type="submit" class="btn btn-success btn-send" value="Envoie">
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
         </div>
      </form>
   </div>
</div>