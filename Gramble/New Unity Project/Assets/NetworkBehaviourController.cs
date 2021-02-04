using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using Mirror;

public class NetworkBehaviourController : NetworkBehaviour
{

    public PlayerController playercontroller;
    public override void OnStartLocalPlayer()
    {
        playercontroller.enabled = true;
    }
}