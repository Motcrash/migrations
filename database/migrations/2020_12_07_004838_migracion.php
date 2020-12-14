<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Migracion extends Migration
{

    public function up()
    {

        if (Schema::hasTable('cliente')){
            Schema::Table('cliente', function (Blueprint $table) {
                if(!Schema::hasColumn('cliente', 'customerCode')){
                    $table->Int('customerCode', 30);
                }

                if(!Schema::hasColumn('cliente', 'firstName')){
                    $table->Char('firstName', 40);
                }

                if(!Schema::hasColumn('cliente', 'surName')){
                    $table->Char('surName', 40);
                }

                if(!Schema::hasColumn('cliente', 'adress')){
                    $table->Char('address', 100);
                }

                if(!Schema::hasColumn('cliente', 'postCode')){
                    $table->Char('postCode', 40);
                }

                if(!Schema::hasColumn('cliente', 'telephoneNumber')){
                    $table->Char('telephoneNumber', 40);
                }
            });
        }
        
        if (Schema::hasTable('poemapublicacion')){
            Schema::Table('poemapublicacion', function (Blueprint $table) {
                if(!Schema::hasColumn('poemapublicacion', 'poemCode')){
                    $table->Int('poemCode', 11);
                }

                if(!Schema::hasColumn('poemapublicacion', 'publicationCode')){
                    $table->Int('publicationCode', 11);
                }
            });
        }

        if (Schema::hasTable('poems')){
            Schema::Table('poems', function (Blueprint $table) {
                if(!Schema::hasColumn('poems', 'poemCode')){
                    $table->Int('poemCode', 30);
                }

                if(!Schema::hasColumn('poems', 'poemTitle')){
                    $table->Char('poemTitle', 50);
                }

                if(!Schema::hasColumn('poems', 'poemContents')){
                    $table->Text('poemContents');
                }

                if(!Schema::hasColumn('poems', 'poetCode')){
                    $table->Int('poetCode', 11);
                }

            });
        }

        if (Schema::hasTable('poetas')){
            Schema::Table('poetas', function (Blueprint $table) {
                if(!Schema::hasColumn('poetas', 'poetCode')){
                    $table->Int('poetCode', 30);
                }

                if(!Schema::hasColumn('poetas', 'firstName')){
                    $table->Char('firstName', 30);
                }

                if(!Schema::hasColumn('poetas', 'surName')){
                    $table->Char('surName', 40);
                }

                if(!Schema::hasColumn('poetas', 'address')){
                    $table->Char('address', 100);
                }

                if(!Schema::hasColumn('poetas', 'postCode')){
                    $table->Char('postCode', 20);
                }

                if(!Schema::hasColumn('poetas', 'telephoneNumber')){
                    $table->Char('telephoneNumber', 30);
                }
            });
        }

        if (Schema::hasTable('publicaciones')){
            Schema::Table('publicaciones', function (Blueprint $table) {
                if(!Schema::hasColumn('publicaciones', 'publicationCode')){
                    $table->Int('publicationCode', 30);
                }

                if(!Schema::hasColumn('publicaciones', 'title')){
                    $table->Char('title', 100);
                }

                if(!Schema::hasColumn('publicaciones', 'price')){
                    $table->Decimal('price', 5,2);
                }
            });
        }

        if (Schema::hasTable('ventaPublicacion')){
            Schema::Table('ventaPublicacion', function (Blueprint $table) {
                if(!Schema::hasColumn('ventaPublicacion', 'saleCode')){
                    $table->Int('saleCode', 11);
                }

                if(!Schema::hasColumn('ventaPublicacion', 'publicationCode')){
                    $table->Char('publicationCode', 11);
                }
            });
        }
        
        if (Schema::hasTable('cliente')){
            Schema::Table('ventas', function (Blueprint $table) {
                if(!Schema::hasColumn('ventas', 'saleCode')){
                    $table->Int('saleCode', 30);
                }

                if(!Schema::hasColumn('ventas', 'date')){
                    $table->Date('date');
                }

                if(!Schema::hasColumn('ventas', 'amount')){
                    $table->Decimal('amount');
                }

                if(!Schema::hasColumn('ventas', 'customerCode')){
                    $table->Int('customerCode', 11);
                }
            });
        }

        else {
            Schema::Create('cliente', function (Blueprint $table) {
                $table->Int('customerCode');
                $table->Char('firstName', 40);
                $table->Char('surName', 40);
                $table->Char('address', 100);
                $table->Char('postCode', 40);
                $table->Char('telephoneNumber', 40);
            });

            Schema::Table('poemaPublicacion', function (Blueprint $table) {
                    $table->Int('poemCode', 11);
                    $table->Int('publicationCode', 11);
            });

            Schema::Create('poems', function (Blueprint $table) {
                $table->Int('poemCode', 30);
                $table->Char('poemTitle', 50);
                $table->Text('poemContents');
                $table->Int('address', 11);
            });

            Schema::Table('poetas', function (Blueprint $table) {
                    $table->Int('poetCode', 30);
                    $table->Char('firstName', 30);
                    $table->Char('surName', 40);
                    $table->Char('address', 100);
                    $table->Char('postCode', 20);
                    $table->Char('telephoneNumber', 30);
            });

            Schema::Table('publicaciones', function (Blueprint $table) {
                    $table->Int('publicationCode', 30);
                    $table->Char('title', 100);
                    $table->Decimal('price', 5,2);
            });

            Schema::Table('ventaPublicacion', function (Blueprint $table) {
                    $table->Int('saleCode', 11);
                    $table->Char('publicationCode', 11);
            });

            Schema::Table('ventas', function (Blueprint $table) {
                    $table->Int('saleCode', 30);
                    $table->Date('date');
                    $table->Decimal('amount');
                    $table->Int('poetCode', 11);
            });
            
        }
    }


    public function down()
    {
        Schema::table('cliente', function (Blueprint $table) {
            Schema::dropIfExists('cliente');
        });
        
        Schema::table('poemaPublicacion', function (Blueprint $table) {
            Schema::dropIfExists('poemaPublicacion');
        });

        Schema::table('poems', function (Blueprint $table) {
            Schema::dropIfExists('poems');
        });

        Schema::table('poetas', function (Blueprint $table) {
            Schema::dropIfExists('poetas');
        });

        Schema::table('publicaciones', function (Blueprint $table) {
            Schema::dropIfExists('publicaciones');
        });

        Schema::table('ventaPublicacion', function (Blueprint $table) {
            Schema::dropIfExists('ventaPublicacion');
        });

        Schema::table('ventas', function (Blueprint $table) {
            Schema::dropIfExists('ventas');
        });
    }
}
