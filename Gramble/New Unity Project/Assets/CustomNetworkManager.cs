using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using Mirror;
using UnityEngine.SceneManagement;

public class CustomNetworkManager : NetworkManager
{

    private Dictionary<Dictionary<string, string>, int> roomDictionary = new Dictionary<Dictionary<string, string>, int>();
    private bool alreadyStarted = false;
    public int creatingOrJoining = 0;
    public Dictionary<Dictionary<string, string>, int> RoomDictionary { get => roomDictionary; set => roomDictionary = value; }




    // Start is called before the first frame update
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {
        if (SceneManager.GetActiveScene().name == "MainGame" && creatingOrJoining == 0)
        {
            if (alreadyStarted == false)
            {
                StartHost();
            }
            alreadyStarted = true;
        }
        else if (SceneManager.GetActiveScene().name == "MainGame" && creatingOrJoining == 1)
        {
            if (alreadyStarted == false)
            {
                StartClient();
            }
            alreadyStarted = true;
        }
    }
}
