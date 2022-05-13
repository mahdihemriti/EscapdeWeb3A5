/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.l10n.ParseException;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.messaging.Message;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Agencedelocation;
import com.mycompany.myapp.entities.Agencedelocation;

import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.Date;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author msi
 */
public class ServiceAgencedelocation {

    public ArrayList<Agencedelocation> agens;
    
    public static ServiceAgencedelocation instance=null;
    public boolean resultOK;
    private ConnectionRequest req;
    public ServiceAgencedelocation() {
         req = new ConnectionRequest();
    }

    public static ServiceAgencedelocation getInstance() {
        if (instance == null) {
            instance = new ServiceAgencedelocation();
        }
        return instance;
    }
    


    public ArrayList<Agencedelocation> parseAgencedelocations(String jsonText){
                try {

                    System.out.println(jsonText);
            agens=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                Agencedelocation a = new Agencedelocation();
                                
                float id = Float.parseFloat(obj.get("id").toString());
                a.setId((int) id);
                a.setLibelle(obj.get("libelle").toString());
                a.setAdresse(obj.get("adresse").toString());
                a.setNumtel(obj.get("numtel").toString());
                a.setEmail(obj.get("email").toString());
                a.setImage(obj.get("image").toString());
                a.setLikes((int) Float.parseFloat(obj.get("likes").toString()));

                               
                agens.add(a);


            }
        } catch (IOException ex) {
            
        }
        return agens;
    }
    public ArrayList<Agencedelocation> getAllAgencedelocations(){
        String url = Statics.BASE_URL+"agence/mobile/aff";
        req.setUrl(url);
        req.addResponseListener(new com.codename1.ui.events.ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                agens = parseAgencedelocations(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        com.codename1.io.NetworkManager.getInstance().addToQueueAndWait(req);
        return agens;
    }


    public boolean addAgencedelocation(Agencedelocation u) {
        String url = Statics.BASE_URL + "agence/mobile/new?libelle="+u.getLibelle()+"&adresse="+u.getAdresse()+"&numtel="+u.getNumtel()+"&image="+u.getImage()+"&email="+u.getEmail()+"&likes="+u.getLikes();//création de l'URL
               req.setUrl(url);
               System.out.println(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

        public boolean editAgencedelocation(Agencedelocation u) {
        String url = Statics.BASE_URL + "agence/mobile/editAgen?id="+u.getId()+"&libelle="+u.getLibelle()+"&adresse="+u.getAdresse()+"&numtel="+u.getNumtel()+"&image="+u.getImage()+"&email="+u.getEmail()+"&likes="+u.getLikes();//création de l'URL
               req.setUrl(url);
               System.out.println(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public boolean deleteAgencedelocation(int id) {
        String url = Statics.BASE_URL + "agence/mobile/del?id=" + id;
               req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

}
