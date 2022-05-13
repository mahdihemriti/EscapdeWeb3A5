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
import com.mycompany.myapp.entities.Sitetouristique;
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
public class ServiceSitetouristique {

    public ArrayList<Sitetouristique> destinations;
    
    public static ServiceSitetouristique instance=null;
    public boolean resultOK;
    private ConnectionRequest req;
    public ServiceSitetouristique() {
         req = new ConnectionRequest();
    }

    public static ServiceSitetouristique getInstance() {
        if (instance == null) {
            instance = new ServiceSitetouristique();
        }
        return instance;
    }
    


    public ArrayList<Sitetouristique> parseSitetouristiques(String jsonText){
                try {

                    System.out.println(jsonText);
            destinations=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                Sitetouristique a = new Sitetouristique();
                                
                float id = Float.parseFloat(obj.get("id").toString());
                a.setId((int) id);
                a.setType(obj.get("type").toString());
                a.setLibelle(obj.get("libelle").toString());
                a.setAdresse(obj.get("adresse").toString());
                a.setDescription(obj.get("description").toString());
                a.setPrix(Float.parseFloat(obj.get("prix").toString()));

                               
                destinations.add(a);


            }
        } catch (IOException ex) {
            
        }
        return destinations;
    }
    public ArrayList<Sitetouristique> getAllSitetouristiques(){
        String url = Statics.BASE_URL+"sitetour/mobile/aff";
        req.setUrl(url);
        req.addResponseListener(new com.codename1.ui.events.ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                destinations = parseSitetouristiques(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        com.codename1.io.NetworkManager.getInstance().addToQueueAndWait(req);
        return destinations;
    }


    public boolean addSitetouristique(Sitetouristique u) {
        String url = Statics.BASE_URL + "sitetour/mobile/new?libelle="+u.getLibelle()+"&description="+u.getDescription()+"&prix="+u.getPrix()+"&type="+u.getType()+"&adresse="+u.getAdresse();//création de l'URL
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

        public boolean editSitetouristique(Sitetouristique u) {
        String url = Statics.BASE_URL + "sitetour/mobile/editSite?id="+u.getId()+"&libelle="+u.getLibelle()+"&description="+u.getDescription()+"&prix="+u.getPrix()+"&type="+u.getType()+"&adresse="+u.getAdresse();//création de l'URL
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

    public boolean deleteSitetouristique(int id) {
        String url = Statics.BASE_URL + "sitetour/mobile/del?id=" + id;
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
