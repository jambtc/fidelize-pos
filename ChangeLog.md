#### 10.01.2020
    - le invoices create dal pos (su token) sono differenti dalle transazioni token
    anche se è possibile replicare (quasi) tutti i parametri. Pertanto aggiungo un'altra tabella
    che si chiamerà PosInvoices per gestire le richieste di pagamento tramite pos
    e i relativi pagamenti con il wallet bolt (bolt_tokens)


#### 08.01.2020
  - Migrazione


#### 01.08.2019
    - #270 : Aperto nuovo branch no-associazione
    - eliminato campo da np_merchants (id_association) [ALTER TABLE np_merchants DROP id_association;]
    - eliminato Associations da MerchantsController
    - eliminato UsersController
    - ripulite tutte le views e i controllers dove compariva Associations
    - aggiunta funzione get_domain in classe Utility

#### 22.07.2019
    - #271 : menu: icona $ diventa btc

#### 11.07.2019
    - #251 : dopo creazione pos automatico non funziona pos invoice

#### 02.07.2019
    [sin]
        - get del sin da parte della app principale Napay

#### 12.06.2019
    [sw]
        - new sw. Logout funzionante
    [menu]    
        - Visualizzazione lista transazioni e dettaglio
        - visualizzazione lista transazioni token e dettaglio
        - Logout funzionante
    [sin]
        - funzionalità di salvataggio del SIN dopo il primo ingresso in modo
        tale da non doverlo ripetere in caso di logout

#### 26.05.2019
  [poa]
    - adeguamento utilizzo nuovo url settings->poa_url

#### 22.05.2019
    - new icons

#### 17.05.2019
    [Notifiche]
        - Notifiche x N-Pay
    [PWA]
        - Adeguamento index con manifest.json


#### 15.05.2019
    - Pulizia software

#### 08.05.2019
    - First commit

    [Notifications]
        - Nuova gestione delle notifiche WebApp


### V 0.0.1 - 08.05.20199
    Initial Release
