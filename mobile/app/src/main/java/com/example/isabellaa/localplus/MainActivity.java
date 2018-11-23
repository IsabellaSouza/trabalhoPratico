package com.example.isabellaa.localplus;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    void Abrirtabela_carro(View view){

        Intent it = new Intent(this,tabela_carro.class);
        startActivity(it);
    }
    void Sairmain(View view){

        finish();
    }
}
