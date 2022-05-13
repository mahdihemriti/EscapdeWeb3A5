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
import com.mycompany.myapp.entities.Destination;
import com.mycompany.myapp.entities.Destination;

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
public class ServiceDestination {

    public ArrayList<Destination> destinations;
    
    public static ServiceDestination instance=null;
    public boolean resultOK;
    private ConnectionRequest req;
    public ServiceDestination() {
         req = new ConnectionRequest();
    }

    public static ServiceDestination getInstance() {
        if (instance == null) {
            instance = new ServiceDestination();
        }
        return instance;
    }
    


    public ArrayList<Destination> parseDestinations(String jsonText){
                try {

                    System.out.println(jsonText);
            destinations=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                Destination a = new Destination();
                                
                float id = Float.parseFloat(obj.get("id").toString());
                a.setId((int) id);
                a.setPays(obj.get("pays").toString());
                a.setVille(obj.get("ville").toString());
                a.setImg(obj.get("img").toString());

                               
                destinations.add(a);


            }
        } catch (IOException ex) {
            
        }
        return destinations;
    }
    public ArrayList<Destination> getAllDestinations(){
        String url = Statics.BASE_URL+"destination/mobile/aff";
        req.setUrl(url);
        req.addResponseListener(new com.codename1.ui.events.ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                destinations = parseDestinations(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        com.codename1.io.NetworkManager.getInstance().addToQueueAndWait(req);
        return destinations;
    }


    public boolean addDestination(Destination u) {
        String url = Statics.BASE_URL + "destination/mobile/new?pays="+u.getPays()+"&ville="+u.getVille()+"&img="+u.getImg();//création de l'URL
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

        public boolean editDestination(Destination u) {
        String url = Statics.BASE_URL + "destination/mobile/editDest?id="+u.getId()+"&pays="+u.getPays()+"&ville="+u.getVille()+"&img="+u.getImg();//création de l'URL
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

    public boolean deleteDestination(int id) {
        String url = Statics.BASE_URL + "destination/mobile/del?id=" + id;
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
