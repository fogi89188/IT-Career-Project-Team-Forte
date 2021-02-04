using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ClientCameraFollow : MonoBehaviour
{
    public Transform playerTransform;
    public int depth = -20;

    // Update is called once per frame
    void Update()
    {
        if (playerTransform != null)
        {
            Vector3 position = new Vector3(playerTransform.position.x, playerTransform.position.y, -10);
            transform.position = position;
        }
    }

    public void setTarget(Transform target)
    {
        playerTransform = target;
    }
}
