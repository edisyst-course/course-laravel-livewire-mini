# Dropdowns
La select `wire:model="country"` determina le option della select `wire:model="city"`.

La seconda select si aggiorna all'update dell'elemento `wire:model="country"`


# Parentchildren

Controllare i metodi della classe Livewire

Un ordine ha tanti prodotti (che posso aggiungere/rimuovere)

    wire:model="orderProducts.{{$index}}.product_id"
    wire:model="orderProducts.{{$index}}.quantity"


# Editmodal
Nei mopdal uso sempre una variabile del tipo `public $showModal = false;`

Ho un elenco di righe e al clic il modal fa editare quella selezionata


# Autorefresh
Con `wire:poll.3s` ogni 3 sec si lancia una chiamata per una diversa foto di gatti


# Slug

L'update di `$this->name` triggera il metodo `createSlug` di un pkg esterno

