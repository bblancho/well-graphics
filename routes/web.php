<?php

/** Le front */
	Route::get('/' , 'FrontController@index')->name('front.index');

	Route::get('/services' , 'FrontController@services')->name('front.services');
	Route::get('/service/{slug}' , 'FrontController@showService')->name('front.services.show');
	Route::get('/realisations' , 'FrontController@realisations')->name('front.realisations');
	Route::get('/confirm' , 'FrontController@confirm')->name('front.confirm');
	Route::get('/contact' , 'ContactController@index')->name('front.contact');
	Route::post('/contact/newsletter','ContactController@newsletter')->name('contacts.newsletter');
	Route::post('/contact/devis','ContactController@devis')->name('contacts.devis');
	Route::post('/contact/contactus','ContactController@contact')->name('contacts.contactus');
	Route::post('/contact/rdv','ContactController@rdv')->name('contacts.rdv');
	
/*** Commandes **/
	Route::namespace('Admin')->group(function () {
		Route::get('/commande', 'CommandeController@index')->name('front.commande.index') ;
		Route::get('/commande/{id}', 'CommandeController@showCommande')->name('front.commande.show') ;
		Route::get('/facture/{commande}', 'CommandeController@showFactureCommande')->name('front.facture') ;
	});
/** Panier d'achat */
	Route::get('/panier', 'CartController@index')->name('cart.index') ;
	Route::get('/facturation', 'CartController@facturation')->name('cart.facturation') ;
	Route::post('/info-facturation', 'CartController@dataFacturation')->name('cart.dataFacturation') ;
	Route::get('/ajouter/{id}', 'CartController@add')->name('cart.add') ;
	Route::get('/retirer/{id}', 'CartController@drop')->name('cart.drop') ;
	Route::get('/vider', 'CartController@clearPanier')->name('cart.vider') ;


/** Paiement */
	Route::get('/checkout', 'CartController@checkout')->name('cart.checkout') ;
	Route::post('/checkout', 'CartController@paiement')->name('cart.paiement') ;

/**  Mon compte front */
	Route::get('/compte/password', 'FrontController@password')->name('front.password') ;
	Route::put('/compte/password/update', 'FrontController@updatePassword')->name('front.password.update') ;
	Route::get('/compte/{id}', 'FrontController@showCompte')->name('front.compte.show') ;
	Route::get('/compte/{id}/edit', 'FrontController@editCompte')->name('front.compte.edit') ;
	Route::put('/compte/{id}/update', 'FrontController@updateCompte')->name('front.compte.update') ;


/** La connexion */
	Auth::routes();

/** Admin  */
	Route::namespace('Admin')->prefix('admin')->group(function () {

		// Accueil
		Route::get('/', 'AdminController@index')->name('admin.index') ;
		
		// uers
		Route::resource('users', 'UsersController', ['as' => 'admin']);

		// Autre
		Route::get('/messenger', 'AdminController@chat')->name('admin.chat') ;
		Route::get('/mentions', 'AdminController@mentions')->name('admin.mentions') ;
		Route::get('/carte', 'AdminController@carte')->name('admin.carte') ;

		// Services
		Route::resource('services', 'ServicesController', ['as' => 'admin']);

		// Commandes
		Route::get('commande', 'CommandeController@index')->name('commande.index') ;
		Route::get('commande/{id}', 'CommandeController@show')->name('commande.show') ;
		Route::get('facture/{commande}', 'CommandeController@showFacture')->name('facture') ;
	});

/** Admin mail */
	Route::get('/admin/mailrelation', 'MailrelationController@index')->name('admin.mail.index');
	Route::get('/admin/mailrelation/contact/{contact}', 'MailrelationController@contactShow')->name('admin.mail.contactShow');
	Route::post('/admin/mailrelation/reponsecontact/', 'MailrelationController@contactAdmin')->name('admin.reponsemail.contact'); 
	Route::get('/admin/mailrelation/contact/{contact}/delete', 'MailrelationController@contactDelete')->name('admin.mail.contactDelete')->middleware('auth');
	Route::get('/admin/mailrelation/newsletter', 'MailrelationController@newsletter')->name('admin.mail.newsletter');
	Route::get('/admin/mailrelation/newsletter/{newsletter}/delete', 'MailrelationController@newsletterDelete')->name('admin.mail.newsletterDelete');
	Route::get('/admin/mailrelation/devis', 'MailrelationController@devis')->name('admin.mail.devis');
	Route::get('/admin/mailrelation/devis/{devis}', 'MailrelationController@devisShow')->name('admin.mail.devisShow');
	Route::get('/admin/mailrelation/devis/{devis}/delete', 'MailrelationController@devisDelete')->name('admin.mail.devisDelete');
	Route::get('/admin/mailrelation/rdv', 'MailrelationController@rdv')->name('admin.mail.rdv');
	Route::get('/admin/mailrelation/rdv/{rdv}', 'MailrelationController@rdvShow')->name('admin.mail.rdvShow');
	Route::get('/admin/mailrelation/rdv/{rdv}/delete', 'MailrelationController@rdvDelete')->name('admin.mail.rdvDelete');
